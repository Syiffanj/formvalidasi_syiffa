<style type="text/css">
table{
    font:normal 12px tahoma,verdana;
    background-color:#e1eff8;
}
table tr td{
    padding:0 5px 0 5px;
    border:#e2eef6 1px solid;
}
#eror_div{
	font:normal 10px Tahoma,Verdana;
	display:block;
	width:500px;
	border:red 1px solid;
	padding:5px;
}
#eror_div p{
	margin:0 0 0 0;
	padding:0 0 0 0;
	color:red;
}
#msg_div{
	font:normal 10px Tahoma,Verdana;
	display:block;
	width:500px;
	border:green 1px solid;
	padding:5px;
	color:green;
}
</style>
<?php 
if($eror){
	echo '<div id="eror_div">';
	echo validation_errors();
	echo '</div>';
}

if($register){
	echo '<div id="msg_div">'.$register.'</div>';
}
?>
<form method="post" name="frm" action="">
<table width="500" cellpadding="0" cellspacing="0">
    <tr>
        <td height="25" colspan="2" bgcolor="#FFD700" style="font:bold 14px tahoma;color:#000000;">Form Pendaftaran</td>
    </tr>
    <tr>
        <td width="150" height="25">No Identitas</td>
        <td><input type="text" name="no_id" size="30"/></td>
    </tr>
    <tr>
        <td width="150" height="25">Nama Lengkap</td>
        <td><input type="text" name="nama" size="50"/></td>
    </tr>
    <tr>
        <td width="150" height="25">Alamat</td>
        <td><textarea name="alamat" cols="40" rows="5"></textarea></td>
    </tr>
    <tr>
        <td width="150" height="25">Email</td>
        <td><input type="text" name="email" size="30"/></td>
    </tr>
    <tr>
        <td width="150" height="25">Telepon</td>
        <td><input type="text" name="telepon" size="30"/></td>
    </tr>
    <tr>
        <td width="150" height="25"></td>
        <td>
        <input type="submit" name="btnKirim" value="Kirim"/>
        <input type="reset" name="btnReset" value="Reset"/>
        </td>
    </tr>
</table>  
</form>