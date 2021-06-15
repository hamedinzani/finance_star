$("#status").on('change', function(el) {
    volume = [];
price = [];
cost = [];
jum_table=0;
    let ids = $(el.target).val();
    dinamisRow.html('');
    if(ids!=''){
        $.ajax({
            type: 'ajax',
            url: `http://localhost/finance/freelance/tampilkanDataitem/`+ids,
            async: false,
            dataType: 'json',
            success: function (data) {
                for(i=0; i<data.length; i++){
                    addRow(btoa(JSON.stringify(data[i])));}
            
    }
  
   });
    } else {jum_table=0;addRow();$('#pn').val("");}
       
});