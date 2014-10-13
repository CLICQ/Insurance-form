<?
header('Content-Type: text/html; charset=utf-1251');
header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
header('Content-transfer-encoding: binary');
header('Content-Disposition: attachment; filename=list.xls');
header('Content-Type: application/x-unknown');

echo '
<table border="1">
	<tr>
		<td><b>Текст вопроcа</b></td>
		<td><b>Вариант ответа</b></td>
		<td><b>Наименование дилера</b></td>
		<td><b>ФИО клиента</b></td>
		<td><b>Марка</b></td>
		<td><b>Модель</b></td>	
		<td><b>Цвет</b></td>	
	</tr>'.$_POST["table_lines_html"].'</table>';
?>