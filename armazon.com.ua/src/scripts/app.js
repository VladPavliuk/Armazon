/*
 * Creating popover menu.
 * Bootstrap require this code.
 */
$(function () {
    $('[data-toggle="popover"]').popover()
})

function uploadFramePhoto(profile, size, color) {

    var modalWindowId = '#more-photos-modal-' + profile + '-' + size + '-' + color;
    var modalWindowBody = modalWindowId + ' .modal-dialog' +  ' .modal-content' + ' .modal-body' + ' .carousel-inner';

    var modalImage = modalWindowBody + ' .item:nth-child(1)' + ' img';
    var modalImageUrl = 'src/images/frames/' + profile + '/' + size + '/' + color + '/' +  profile + '_' + size + '_' + color + '.jpg';
    $(modalImage).attr('src', modalImageUrl);

    var modalImage = modalWindowBody + ' .item:nth-child(2)' + ' img';
    var modalImageUrl = 'src/images/frames/' + profile + '/' + size + '/' + color + '/' +  profile + '_' + size + '_' + color + '_back.jpg';
    $(modalImage).attr('src', modalImageUrl);

    var modalImage = modalWindowBody + ' .item:nth-child(3)' + ' img';
    var modalImageUrl = 'src/images/frames/' + profile + '/' + size + '/' + color + '/' +  profile + '_' + size + '_' + color + '_front.jpg';
    $(modalImage).attr('src', modalImageUrl);
}

/**
 * Start when set value in input.
 *
 * @param profile
 * @param size
 * @param color
 * @param count
 */
function inputCount(profile, size, color, count) {

    addToCart(profile, size, color, count);

    var inputId = "#" + profile + "-" + size + "-" + color;

    var hideButton = $(inputId).parent().find('.remove');

    if (count > 0) {

        showRemoveButton(hideButton);
    } else {

        hideRemoveButton(hideButton);
    }
}

/**
 * Send count of current frame to shopping cart.
 *
 * @param profile
 * @param size
 * @param color
 * @param count
 */
function addToCart(profile, size, color, count) {

    var inputId = "#" + profile + "-" + size + "-" + color;

    if (liveInputValid(inputId, count)) {

        if (count === "") {
            count = 0;
        }

        var params = profile + '/' + size + '/' + color;
        var urlRequst = "cart-add/" + params + "/" + count;

        $.get(urlRequst, function (response) {

            var dataArray = JSON.parse(response);

            var totalCount = dataArray.totalCount;
            var totalPrice = dataArray.totalPrice;
            var firstDiscount = dataArray.firstDiscount;
            var secondDiscount = dataArray.secondDiscount;

            if (firstDiscount === true) {
                $(".first-discount").addClass("list-group-item-success");
            } else {
                $(".first-discount").removeClass("list-group-item-success");
            }

            if (secondDiscount === true) {
                $(".second-discount").addClass("list-group-item-success");
            } else {
                $(".second-discount").removeClass("list-group-item-success");
            }

            updateTotalCount(totalCount);
            updateTotalPrice(totalPrice, secondDiscount);

            return true;
        });
    }
}

/**
 * Validate value of input.
 *
 * @param inputId
 * @param inputValue
 * @returns {boolean}
 */
function liveInputValid(inputId, inputValue) {

    if (inputValue == 0) {
        $(inputId).val(null);

        return true;
    }

    if (inputValue < 0) {
        $(inputId).val(null);
        return false;
    }

    return true;
}

/**
 * Clear input value and send zero count of current frame.
 *
 * @param profile
 * @param size
 * @param color
 * @param removeButton
 */
function clearInput(profile, size, color, removeButton) {

    hideRemoveButton(removeButton);
    addToCart(profile, size, color, 0);
}

/**
 * SHOW Button which remove input value by clicking.
 *
 * @param removeButton
 */
function showRemoveButton(removeButton) {

    removeButton.removeClass("hide");
}

/**
 * HIDE Button which remove input value by clicking.
 *
 * @param removeButton
 */
function hideRemoveButton(removeButton) {

    removeButton.addClass("hide");
}

/**
 * Set value of total COUNT of frame in tag.
 *
 * @param totalCount
 */
function updateTotalCount(totalCount) {

    if (totalCount > 0) {
        $(".total-info").css("display", "block");
    } else {
        $(".total-info").css("display", "none");
    }
    $(".total-count b").text(totalCount + " штук");
}

/**
 * Set value of total PRICE of frame in tag.
 *
 * @param totalPrice
 */
function updateTotalPrice(totalPrice, secondDiscount) {

    if (secondDiscount === true) {
        $(".total-price b").text(totalPrice + " грн. (-15%)");
    } else {
        $(".total-price b").text(totalPrice + " грн.");
    }
}





