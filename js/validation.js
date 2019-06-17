$("#btnValidate").click(function () {

    var value1 = $("#cid").val();
    var regX = /C\d{3}/;
    var result = regX.test(value1);
    if (!result) {
        $("#cid").css('border', '1px solid red');
    }



    var value2 = $("#tell").val();
    var regX2 = /\d{3}-\d{7}/;
    var result2 = regX2.test(value2);
    if (!result2) {
        // alert("Invalid Number")
        $("#tell").css('border', '1px solid red');
    }



    var value4 = $("#salary").val().length > 2;
    var regX4 = /^\d{1,6}\.\d{1,6}$/;
    var result4 = regX4.test(value4);
    if (!result) {
        // alert("Please input Salary Like : 0000.00");
        $("#salary").css('border', '1px solid red');
    }
})


