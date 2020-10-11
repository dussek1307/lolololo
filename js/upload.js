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