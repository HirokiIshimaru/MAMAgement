function goActEvent() {
    // ajax로 값 전달
    var met = document.getElementsByName("item");
    var metName = "";
    for (var i = 0; i < met.length; i++) {
        if (met[i].checked) {
            metName = met[i].value;
            break;
        }
    }
    console.log(metName);

    var userName = "1";
    var yearsT = document.getElementById("yearsT").value;
    var monthT = document.getElementById("monthT").value;
    var dayT = document.getElementById("dayT").value;
    var today = new Date();
    var upYears = today.getFullYear();
    var upMonth = today.getMonth() + 1;
    var upDay = today.getDate();
    console.log(upYears);

    $.ajax({
        url: 'http://localhost/mama/mamaMeter.php',
        data: {
            userN: userName,
            meter: metName,
            kigenY: yearsT,
            kigenM: monthT,
            kigenD: dayT,
            toDayY: upYears,
            toDayM: upMonth,
            toDayD: upDay
        },
        type: 'POST'
    });
}