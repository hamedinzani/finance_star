$( document ).ready(function() {
    hitung();
});

$("#status").on('change', function(el) {
    var id = "";
    volume = [];
price = [];
cost = [];
    let ids = $(el.target).val();
    if(ids!=''){
        $.ajax({
            type: 'ajax',
            url: `http://localhost/finance/purchase/tampilkanData/`+ids,
            async: false,
            dataType: 'json',
            success: function (data) {
                    id = data[0].project_Name;
              console.log(id)
                $('#pn').val(id);
            
    }
  
   });
    } else {$('#pn').val("");}
       
});

$("#tipe_Po").on('change', function(el) {
    let ids = $(el.target).val();
    console.log(ids);
    change_table(ids);
    hitung();
});

function change_table(ids=null){
    if(ids=='1'||ids==null){
        $('#mw1').val('Locked');
        $('#w1').val('0');
        $('#mw2').val('Repetitions');
        $('#w2').val('0');
        $('#mw3').val('Fuzzy 100% / CM');
        $('#w3').val('0');
        $('#mw4').val('Fuzzy 95% - 99%');
        $('#w4').val('30');
        $('#mw5').val('Fuzzy 85% - 94%');
        $('#w5').val('50');
        $('#mw6').val('Fuzzy 75% - 84%');
        $('#w6').val('70');
        $('#mw7').val('Fuzzy 50% - 74%');
        $('#w7').val('100');
        $('#mw8').val('new');
        $('#w8').val('100');
    } else if (ids=='2'){
        $('#mw1').val('Locked');
        $('#w1').val('0');
        $('#mw2').val('Repetitions');
        $('#w2').val('15');
        $('#mw3').val('Fuzzy 100% / CM');
        $('#w3').val('0');
        $('#mw4').val('Fuzzy 95% - 99%');
        $('#w4').val('30');
        $('#mw5').val('Fuzzy 85% - 94%');
        $('#w5').val('50');
        $('#mw6').val('Fuzzy 75% - 84%');
        $('#w6').val('70');
        $('#mw7').val('Fuzzy 50% - 74%');
        $('#w7').val('100');
        $('#mw8').val('new');
        $('#w8').val('100');
    } else if (ids=='3'){
        $('#mw1').val('Locked');
        $('#w1').val('0');
        $('#mw2').val('Repetitions');
        $('#w2').val('0');
        $('#mw3').val('Fuzzy 100% / CM');
        $('#w3').val('0');
        $('#mw4').val('Fuzzy 95% - 99%');
        $('#w4').val('30');
        $('#mw5').val('Fuzzy 85% - 94%');
        $('#w5').val('50');
        $('#mw6').val('Fuzzy 75% - 84%');
        $('#w6').val('70');
        $('#mw7').val('Fuzzy 50% - 74%');
        $('#w7').val('100');
        $('#mw8').val('new');
        $('#w8').val('80');
    } else if (ids=='4'){
        $('#mw1').val('-');
        $('#w1').val('0');
        $('#mw2').val('-');
        $('#w2').val('0');
        $('#mw3').val('ICE Match');
        $('#w3').val('0');
        $('#mw4').val('Repetitions');
        $('#w4').val('10');
        $('#mw5').val('Fuzzy 100%');
        $('#w5').val('10');
        $('#mw6').val('99% - 76% (High Fuzzy)');
        $('#w6').val('25');
        $('#mw7').val('75% - 0% (New Words)');
        $('#w7').val('100');
        $('#mw8').val('MT');
        $('#w8').val('70');
    }
}

function hitung(){
    var mw1 = $('#w1').val() * $('#wc1').val() / 100;
    $('#wwc1').val(mw1);
    var mw2 = $('#w2').val() * $('#wc2').val() / 100;
    $('#wwc2').val(mw2);
    var mw3 = $('#w3').val() * $('#wc3').val() / 100;
    $('#wwc3').val(mw3);
    var mw4 = $('#w4').val() * $('#wc4').val() / 100;
    $('#wwc4').val(mw4);
    var mw5 = $('#w5').val() * $('#wc5').val() / 100;
    $('#wwc5').val(mw5);
    var mw6 = $('#w6').val() * $('#wc6').val() / 100;
    $('#wwc6').val(mw6);
    var mw7 = $('#w7').val() * $('#wc7').val() / 100;
    $('#wwc7').val(mw7);
    var mw8 = $('#w8').val() * $('#wc8').val() / 100;
    $('#wwc8').val(mw8);
    var hasil = mw1+mw2+mw3+mw4+mw5+mw6+mw7+mw8;
    var grand =$('#rate').val() * hasil;
    console.log($('#rate').val())
    $('#grand').val(grand);
}