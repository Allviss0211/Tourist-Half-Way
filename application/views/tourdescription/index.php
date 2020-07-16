<div class="row"> 
 
    <div class="col-md-12" id="list_of_tourdescription"> 
 
        <div class="box"> 
 
            <div class="box-header"> 
 
                <h3 class="box-title">Danh sách chi tiết Tour</h3> 
 
                <div class="box-tools"> 
 
                    <a href="<?php echo site_url('tourdescription/add'); ?>" class="btn btn-success btn-sm">Thêm</a> 
 
                </div> 
 
            </div> 
 
            <?php echo form_open("tourdescription/index"); ?> 
 
            <div class="col-md-6"> 
 
                <label for="IdTour" class="control-label">Tên tour</label> 
 
                <div class="form-group"> 
 
                    <select name="IdTour" id="IdTour" class="form-control" onchange="onChangeTour(this.value)"> 
 
                        <option value="0"> - - - Chọn Tour - - - </option>; 
 
                        <?php foreach ($tour as $t) { 
 
                            if ($tour['IdTour'] === $t['IdTour']) { 
 
                                echo "<option value='{$t['IdTour']}' selected>{$t["NameTour"]}</option>"; 
                            } else 
 
                                echo "<option value='{$t['IdTour']}'>{$t["NameTour"]}</option>"; 
                        } ?> 
 
                        ?> 
 
                    </select> 
 
                </div> 
 
            </div> 
 
            <?php echo form_close(); ?> 
 
            <div class="box-body"> 
 
                <table class="table table-striped"> 
 
                    <tr> 
 
                        <!-- <th>IdDesciption</th> --> 
 
                        <th>Tên Tour</th> 
 
                        <th>Timeline</th> 
 
                        <th>Giới thiệu</th> 
 
                        <th>Hình ảnh</th> 
 
                        <th>Ghi chú</th> 
 
                        <th>Thao tác</th> 
 
                    </tr> 
 
                    <?php foreach ($tourdescription as $t) { ?> 
 
                        <tr> 
 
                            <!-- <td><?php echo $t['IdDesciption']; ?></td> --> 
 
                            <td><?php echo $t['Name'] ?></td> 
 
                            <td><?php echo $t['Timeline']; ?></td> 
 
                            <td><?php echo $t['Description']; ?></td> 
 
                            <td><img src="/upload_img/<?php echo $t['Image'] ?>" width="250px" height="150px"></td> 
 
                            <td><?php echo $t['Note']; ?></td> 
 
                            <td> 
 
                                <a href="<?php echo site_url('tourdescription/edit/' . $t['IdDesciption']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sửa</a> 
 
                                <a href="<?php echo site_url('tourdescription/remove/' . $t['IdDesciption']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Xóa </a> 
 
                            </td> 
 
                        </tr> 
 
                    <?php } ?> 
 
                </table> 
 
            </div> 
 
        </div> 
 
    </div> 
 
</div> 
 
<script> 
    function onChangeTour(id) { 
        console.log(id); 
        $.ajax({ 
            url: "<?php echo base_url("tourdescription/get_tourdescription_by_IdTour") ?>", 
            type: 'POST', 
            dataType: 'text', 
            data: { 
                "IdTour": id 
            }, 
            success: function(data) { 
                console.log(data); 
                $("#list_of_tourdescription").html(data); 
            }, 
            error: function() { 
                alert("Lỗi xử lý"); 
            } 
        }); 
    } 
</script>