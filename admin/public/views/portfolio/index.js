$(function () {

    // $.getJSON('organization/getData', function (o) {
    //     $.each(o, function (obj, val) {
    //         $(`#${obj}`).val(val);
    //     })
    // });

    // $("#save_data_btn").on('click', function (e) {
    //     // alert("sdhgjhgsda");
    //     e.preventDefault();

    //     let data = getControlsData('form');

    //     if ($("#organization_name").val().length == 0) {
    //         $(document).Toasts('create', {
    //             title: 'Error',
    //             body: 'Company name field is mandatory',
    //             position: 'bottomRight',
    //             autohide: true,
    //             delay: 1500,
    //             class: 'bg-danger',
    //             icon: 'fas fa-close'
    //         });
    //         return false;
    //     }

    //     data = getControlsData("form", true);

    //     $.ajax({
    //         type: "POST",
    //         url: "organization/update",
    //         data: JSON.stringify(data),
    //         dataType: "json",
    //         success: function (data) {
    //             if (data.res == true) {

    //                 $(document).Toasts('create', {
    //                     title: 'Success',
    //                     body: 'Data updated',
    //                     position: 'bottomRight',
    //                     autohide: true,
    //                     delay: 5000,
    //                     class: 'bg-success',
    //                     icon: 'fas fa-check'
    //                 });
    //             }
    //         }
    //     });

    // });
    getPortfolioData();
    function getPortfolioData() {
        $("#product_details").empty();
        var product_details = null;
        $.getJSON('portfolio/getPortfolioData', function (o) {
            $.each(o, function (i, rec) {
                product_details += '<tr>';
                product_details += '<th scope="row">' + i + '</th>';
                product_details += '<td><img src="../../website/public/uploads/portfolio/' + rec['file'] + '" class="" width="60" height="50" alt="..."></td>';
                product_details += '<td>' + rec['title'] + '</td>';
                product_details += '<td>' + rec['upload_by'] + '</td>';
                product_details += '<td>' + rec['upload_date'] + '</td>';
                product_details += ' <td>' + rec['price'] + '</td>';
                product_details += '<td><i class="fas fa-edit"></i></td>';
                product_details += ' <td><i class="fas fa-trash-alt"></i></td>';
                product_details += '</tr>';
            })
            $("#product_details").append(product_details);
        });
        $("#show_hide_skils_section").slideUp();
    }


    $("#show_hide_product_form").slideUp();
    $("#show_hide_product_btn").click(function (e) {
        e.preventDefault();
        $("#show_hide_product_form").slideDown();

    });

    $("#product_save_btn").click(function (e) {
        e.preventDefault();
        if ($("#product_name").val() == ""
            || $("#upload_by").val() == ""
            || $("#upload_date").val() == ""
            || $("#product_1st_img").val() == ""
            || $("#product_document").val() == ""
            || $("#product_second_img").val() == ""
            || $("#price").val() == "") {
            alert("Wrong");
        }else{
            $.post("portfolio/productSave", 
            {
                title:$("#product_name").val(),
                upload_by:$("#upload_by").val(),
                price:$("#price").val(),
                upload_date:$("#upload_date").val(),
                product_document:$("#product_document").val(),
                product_second_img:$("#product_second_img").val(),
                file:$("#product_1st_img").val()
            },
                function (o) {
                    
                },
                "json"
            );
        }
    });
});