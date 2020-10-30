<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<button id="pickup">Vybrat pobočku</button>
<p id="branchInfo"></p>
</body>

</html>
<script src="script.js"></script>
<script>
    let pickupButton = document.getElementById("pickup")
    let branchInfo = document.getElementById("branchInfo")

    function openWindowWithPost(url, data) {
        let form = document.createElement("form");
        form.target = "_blank";
        form.method = "POST";
        form.action = url;
        form.style.display = "none";

        let input = document.createElement("input");
        input.type = "hidden";
        input.name = "json";
        input.value = data;
        form.appendChild(input);

        document.body.appendChild(form);
        form.submit();
        document.body.removeChild(form);
    }

    console.log(Packeta);
    let pickBranch = function () {
        Packeta.Widget.pick("1d829952011ea051", function (data) {
            openWindowWithPost("pobocka.php", JSON.stringify(data))
            console.log(data)
        })
    }
    pickupButton.addEventListener("click", pickBranch)
</script>