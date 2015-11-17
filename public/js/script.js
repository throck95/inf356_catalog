var formData;

$(document).ready(function() {
    var pointsArray = [];
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgTag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageInput").change(function(){
        readURL(this);
        pointsArray = [];
    });
    $("#imgTag").click(function(e) {
        if(pointsArray.length < 8) {
            var parentOffset = $(this).parent().offset();
            var relX = e.pageX - parentOffset.left;
            var relY = e.pageY - parentOffset.top;
            var point = {x: relX, y: relY};
            pointsArray.push(point);
            console.log(pointsArray.length + ": " + point.x + ", " + point.y);
        }
    });
    $("#submitButton").click(function(e) {
        //e.preventDefault();
        var form = $("#createForm");
        formData = new FormData(form);
        console.log(formData);
        var json_text = JSON.stringify(pointsArray);
        console.log(json_text);
        $.ajax({
            type: "POST",
            url: "http://localhost:8000/image",
            data: {
                formData: formData,
                //info: pointsArray
            },
            cache: false,
            contentType: "multipart/form-data",
            processData: false,
            success: function(msg) {

            }
        })
    });

});