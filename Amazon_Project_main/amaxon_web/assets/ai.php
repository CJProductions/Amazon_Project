<div class="watermark">
    <h1>@sonny</h1>
</div>

<!-- chat box -->
<div class="ai">
    <!-- chat bot title -->
    <div class="aitop">
        <p id="title">AI</p>
    </div>
    <!-- chat -->
    <div class="aimain">
        <input id="mesgimput" type="text" placeholder="Enter message">
        <label for="mesgimput">input</label><br>
    </div>

</div>


<script>
    function stylemsg(msg, type) {
        msg.style.color = "black";
        msg.style.fontSize = "22px";
        msg.style.padding = "10px";
        msg.style.margin = "10px";
        msg.style.borderRadius = "10px";
        msg.style.width = "200px";
        if (type === "left") {
            msg.style.background = "#777777";
        } else {
            msg.style.background = "#df9f1f"
            msg.style.marginLeft = "auto";
        }
        return msg;
    }


    let open = false;

    let aitop = document.getElementsByClassName("aitop");
    let aimain = document.getElementsByClassName("aimain");
    if (aitop.length >0 && aimain.length >0) {
        aitop = aitop[0];
        aimain = aimain[0];
        let inputbox = document.getElementById("mesgimput");

        aitop.addEventListener("click", function() {
            open = !open;
            if (open) {
                aimain.style.visibility = "visible";
                aimain.style.height = "460px";
            }
            else {
                aimain.style.visibility = "hidden";
                aimain.style.height = "0";
            }
        });

        inputbox.addEventListener("keypress", function(e) {
            if (e.key === "Enter" && inputbox.value != "") {
                msg = inputbox.value;
                inputbox.value = "";
                let msgBox = document.createElement('div');
                msgBox.textContent = msg;
                msgBox = stylemsg(msgBox, "left");

                let secondChild = aimain.firstElementChild.nextElementSibling;

                aimain.insertBefore(msgBox, secondChild);

                msgBox = document.createElement('div');
                msgBox.textContent = "thinking...";
                msgBox = stylemsg(msgBox, "right");

                secondChild = aimain.firstElementChild.nextElementSibling;

                aimain.insertBefore(msgBox, secondChild);
            }
        })
    }
</script>