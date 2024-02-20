$(document).ready(function() {
    $("body").on("click", ".remove_item", function() {
        $(this).closest("ul").closest("li").addClass("confirm_delete");
        $(".popover_overlay").fadeIn();
        $(".cart_items_form").find("input[name=action]").val("delete_cart_item");
        $(".cart_items_form").find("input[name=update_cart_item_id]").val($(this).val());
    });
    $("body").on("click", ".cancel_remove", function() {
        $(this).closest("li").removeClass("confirm_delete");
        $(".popover_overlay").fadeOut();
        $(".cart_items_form").find("input[name=action]").val("update_cart");
    });
    /* prototype added delete */
    $("body").on("click", ".remove", function() {
        $(this).closest('li.confirm_delete').remove();
        $(".popover_overlay").fadeOut();
    });

    $("body").on("click", ".increase_decrease_quantity", function() {
        let input = $(this).closest(".form-control").find("input");
        let input_val = parseInt(input.val());
        console.log(input.val())
        if($(this).attr("data-quantity-ctrl") == 1) {
            input.val(input_val + 1);
        }
        else {
            if(input_val != 1) {
                input.val(input_val - 1)
            };
        };
        let total_amount = parseInt(input.val()) * parseInt(($(this).closest(".form-control").find(".price").text()).substring(2));
        $(this).closest(".form-control").find(".total_amount").text("$ " + total_amount);
        $("input[name=update_cart_item_id]").val($(this).val())
        $("input[name=update_cart_item_quantity]").val(input.val());
        $(".cart_items_form").trigger("submit");
    });

    $("body").on("submit", ".cart_items_form", function() {
        $(".popover_overlay").show();
        let form = $(this);
        // console.log("update cart");
        // $.post(form.attr("action"), form.serialize(), function(res) {
        //     $(".wrapper > section").html(res);
        // });
        $(".popover_overlay").fadeOut();
        return false;
    });

    $("body").on("submit", ".checkout_form", function() {
        let form = $(this);
        $.post(form.attr("action"), form.serialize(), function(res) {
            $(".wrapper > section").html(res);
            $("#card_details_modal").modal("show");
        } );

        return false;
    });

    $("body").on("submit", ".pay_form", function() {
        let form = $(this);
        $(this).find("button").addClass("loading");
        $.post(form.attr("action"), form.serialize(), function(res) {
            setTimeout(function(res) {
                $("#card_details_modal").find("button").removeClass("loading").addClass("success").find("span").text("Payment Successfull!");
            }, 2000, res);
            setTimeout(function(res) {
                $("#card_details_modal").modal("hide");
            }, 3000, res);
            setTimeout(function(res) {
                $(".wrapper > section").html(res);
            }, 3200, res);
        });
        return false;
    });
});