<?php
require '../vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

function generateProfitReport($month, $year, $profitData, $totalProfit) {
    $firstDay = date("Y-m-01", strtotime("$year-$month-01"));
    $lastDay = date("Y-m-t", strtotime("$year-$month-01"));

    $content = "
    <html>
        <head>
            <style>
@font-face {
                    font-family: 'DejaVu Sans';
                    font-style: normal;
                    font-weight: normal;
                    src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/DejaVuSans.ttf') format('truetype');
                }
                body {
                    font-family: 'DejaVu Sans', sans-serif;
                }
                h1 {
                    text-align: center;
                    font-size: 24px;
                }
                .subheading {
                    text-align: center;
                    font-size: 14px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #f2f2f2;
                }
                tfoot td {
                    font-weight: bold;
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <h1>Báo cáo lợi nhuận tháng $month/$year</h1>
            <div class='subheading'><i>Từ ngày $firstDay Đến ngày $lastDay</i></div>
            <table>
                <thead>
                    <tr>
                        <th>Ngày</th>
                        <th>Tên Sách</th>
                        <th>Giá Nhập</th>
                        <th>Thành tiền</th>
                        <th>Số Lượng</th>
                        <th>Lợi Nhuận</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($profitData as $row) {
        $content .= "
                    <tr>
                        <td>{$row['ngay']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['gia_goc']}</td>
                        <td>{$row['gia_ban']}</td>
                        <td>{$row['soluong']}</td>
                        <td>{$row['profit']}</td>
                    </tr>";
    }

    $content .= "
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan='5'>Tổng Lợi Nhuận</td>
                        <td>$totalProfit</td>
                    </tr>
                </tfoot>
            </table>
        </body>
    </html>";

    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true); // Kích hoạt tải font từ URL
    $dompdf = new Dompdf($options);

    $dompdf->loadHtml($content);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $pdfPath = '../view/resource/profit_report_prev_month.pdf';

    file_put_contents($pdfPath, $dompdf->output());

    return $pdfPath;
}
?>