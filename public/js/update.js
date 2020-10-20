// $(document).ready(function(){
//     $('.update').click(function(evt){
//         // var name=$(this).data("name");
//         // var form=$(this).closest("form");
//         evt.preventDefault();
//         swal({
//             title:`อัพเดทข้อมูลเรียบร้อย`,

//             text:`ระบบได้อัพเดทข้อมูลห้องนี้ เรียบร้อบแล้ว`,
//             icon:"success",
//             // buttons:true,
//             // dangerMode:true
//         })
//     });
// });


$(document).ready(function(){
    $('.update').click(function(evt){
        // var name=$(this).data("name");
        var form=$(this).closest("form");
        evt.preventDefault();
        swal({
            title:`อัพเดทข้อมูลเรียบร้อย`,
            text:`ระบบได้อัพเดทข้อมูลห้องนี้ เรียบร้อบแล้ว`,
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
