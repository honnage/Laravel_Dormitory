$(document).ready(function(){
    $('.save').click(function(evt){
        // var name=$(this).data("name");
        var form=$(this).closest("form");
        evt.preventDefault();
        swal({
            title:`บันทึกข้อมูลเรียบร้อย`,
            text:`ระบบได้บันทึกข้อมูลนี้ เรียบร้อบแล้ว`,
            icon:"success",
            buttons:true,
            // dangerMode:true

        }).then((wilDelete)=>{
            if(wilDelete){
                form.submit();
            }
        });
    });
});
