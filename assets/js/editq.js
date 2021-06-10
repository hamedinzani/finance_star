$(document).ready(function(){
    tampil_data_barang();   //pemanggilan fungsi tampil barang.
      
    //fungsi tampil barang
    function tampil_data_barang(){
        $.ajax({
            type  : 'GET',
            url   : '<?php echo base_url('+`/quitation/edit`+')?>',
            async : true,
            dataType : 'json',
            success : function(edit){
                var html = '';
                var i;
                for(i=0; i<edit.length; i++){
                    html += '<tr>'+
                            '<td><input type="text" id="jobdesc" name="jobdesc[]" value="'+edit[i].job_Desc+'" ></td>'+
                            '<td><input type="text" class="volume volume'+i+'" name="volume[]" value="'+edit[i].volume+'"></td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }
});