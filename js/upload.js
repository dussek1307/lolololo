let addCount = 2;
$(".add-lan-click").click(function () {
    if (addCount <= 3) {
        let node = `<div class="native-language-row">
            <select class="menu-title select-style" name="meansOfTrade${addCount}" id="">
                <option value="default">선택</option>
                <option value="pay">계좌거래</option>
                <option value="direct">안전거래</option>
                <option value="safe">직거래</option>
            </select>
        </div>`;
        $(".container").append(node);
        if (addCount == 3) $(this).hide();
        addCount++;
    }
});

function preview(e) {
    var input = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function () {
        var result = reader.result;
        var img = document.getElementById("img");
        img.src = result;
    }
    reader.readAsDataURL(input);
}
let privateCount = 1;
$(".i-checkbox").click(function () {
    if (privateCount) {
        $(this).addClass("i-checkbox-checked");
        $(".i-checkbox-input").prop("checked", true);
        privateCount = 0;
    } else {
        $(".i-checkbox").removeClass("i-checkbox-checked");
        $(".i-checkbox-input").prop("checked", false);
        privateCount = 1;
    }
})
// price comma separator format
$('#price').on("keyup", function (event) {

    // 1.
    var selection = window.getSelection().toString();
    if (selection !== '') {
        return;
    }

    // 2.
    if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
        return;
    }

    // 3
    var $this = $(this);
    var input = $this.val();

    // 4
    var input = input.replace(/[\D\s\._\-]+/g, "");

    // 5
    input = input ? parseInt(input, 10) : 0;

    // 6
    $this.val(function () {
        return (input === 0) ? "" : input.toLocaleString("en-US");
    });

});
// phone number input
function inputPhoneNumber(obj) {



    var number = obj.value.replace(/[^0-9]/g, "");
    var phone = "";



    if (number.length < 4) {
        return number;
    } else if (number.length < 7) {
        phone += number.substr(0, 3);
        phone += "-";
        phone += number.substr(3);
    } else if (number.length < 11) {
        phone += number.substr(0, 3);
        phone += "-";
        phone += number.substr(3, 3);
        phone += "-";
        phone += number.substr(6);
    } else {
        phone += number.substr(0, 3);
        phone += "-";
        phone += number.substr(3, 4);
        phone += "-";
        phone += number.substr(7);
    }
    obj.value = phone;
}