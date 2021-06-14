
 // list all user in datatable

$("#status").on('change', function(el) {
    var id = "";
    volume = [];
price = [];
cost = [];
    let ids = $(el.target).val();
    dinamisRow.html('');
    if(ids!=''){
        $.ajax({
            type: 'ajax',
            url: `http://localhost/finance/purchase/tampilkanData/`+ids,
            async: false,
            dataType: 'json',
            success: function (data) {
                try {
                    id = data[0].project_Name;
              console.log(id)
              if(id!=''){
                $('#pn').val(id);
              for(i=0; i<data.length; i++){
                addRow(btoa(JSON.stringify(data[i])));}
              }
              
                 }
                 catch (err) {
                    console.log(err);
                 }
            
    }
  
   });
    } else {addRow();$('#pn').val("");}
       
});