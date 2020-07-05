<form action="" method="post" enctype="multipart/form-data"> 
        <tr>
            <td>Tên hoa</td>
            <td><input type="text" name="TenBoHoa"></td>
        </tr>
        <tr>
            <td>Giá bó hoa</td>
            <td><input type="number" name="GiaBoHoa"></td>
        </tr>

        <tr>
            <td>Hình</td>
            <td><input type="file" name="Hinh"></td>
        </tr>
    <tr>
        <td colspan = 2>
            <button>Lưu file</button>
        </td>
    </tr>        
</form>

<?php
    if(isset($_FILES["Hinh"]["error"] == 0 && $_FILES["Hinh"]))
    {
        if(move_uploaded_file($_FILES["Hinh"]["tmp_name"], "hoa/".$_FILES["Hinh"]["name"]))
        {
            $content = @file_get_contents("hoa_xuan.txt");
            $mang = explode("/*", $content);
            $tenhoa = $_REQUEST["TenBoHoa"];
            $gia = number_format($tenhoa);
            $chuoi = <<< EOD
            <h2> Đã thêm thành công</h2>
            <div style="text-align:center">
            <img src = "hoa/$_FILES["Hinh"]["name"]" alt="{$tenhoa}" /> <br>
            <h3>{$tenhoa}</h3>
            <h4>{$gia} đ</h4>
            </div>
EOD;
            echo $chuoi;

            //ghi xuống file
            $chuoi_ghi_xuong = "/*{$tenhoa}|{$_REQUEST["GiaBoHoa"]}|{$_FILES["Hinh"]["name"]}";
            $file = fopen("hoa_xuan.txt", "at");
            fwrite($file, $chuoi_ghi_xuong);
            fclose($file);
        }
    }
?>