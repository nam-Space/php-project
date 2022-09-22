<?php require 'assets/includes/header.php' ?>
    <style>
        #wp-content {
            background-image: url(./assets/images/bg-body.jpg);
            min-height: 960px;
        }

        .content {
            padding: 20px;
        }

        .title {
            margin-top: 200px;
            background: rgb(182, 240, 231);
        }

        /* larger desktop */
        @media(max-width:1198.98px) {}

        /* desktop */
        @media(max-width:991.98px) {}

        /* medium */
        @media(max-width:767.98px) {}

        /* phone */
        @media(max-width:575.98px) {}
    </style>

        <div id="wp-content" class="border">
            <div class="container">
                <div class="content">
                    <form action="" class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h1 class="text-center mb-3">
                                    <p class="text-danger title p-1 rounded">BÓI <span
                                            class="text-primary">TÍNH</span><span class="text-warning"> CÁCH</span><span
                                            class="text-success"> QUA</span> TÊN</p>
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <label for="" class="m-0 py-2"><strong class="btn btn-primary btn-sm">Nhập Vào
                                        Tên:</strong></label>
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <input type="text" placeholder="VD:Quý"
                                    class="form-control text-primary fort-weight-bold" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-primary spinner-border mt-4" id="result"></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="btn-control col-md-12">
                                <div class="btn btn-info mt-4" id="check">Bắt đầu bói</div>
                                <button class="btn btn-danger mt-4 ml-1">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php require 'assets/includes/footer.php' ?>

    <script>
        $(document).ready(function () {
            $("#check").click(function () {
                var name = $("#name").val()
                var random_number = Math.round(Math.random() * 10)
                console.log(random_number)
                switch (random_number) {
                    case 0:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " hòa đồng, thân thiện nên được rất nhiều người yêu quý");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 1:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " thích ở một mình , thích được tự mình thưởng thức những bộ phim hay , tự mình đọc sách ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 2:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " cầu tiến trong mọi lúc, luôn luôn nỗ lực phấn đấu để tốt hơn chính bản thân mình ngày hôm qua ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 3:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " sống chó xuyên quốc gia, chuyên đi ăn trực nhà người khác ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 4:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " rất thích ăn đồ ăn bẩn tưởi,bánh rơi vào cức rồi vẫn cố để nhặt lên để ăn.");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 5:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " thích chơi thể thao ,thích làm việc cần sự vận động, không muốn bị gò bó và đặc biệt họ nấu ăn rất ngon. ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 6:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " thích ngẫm nghĩ, luôn luôn sử dụng tính logic để giải quyết mọi vấn đề ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 7:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " tỉ mỉ , cẩn thận những người này tuy bên ngoài luôn lạnh lùng nhưng bên trong lại là một người sống rất tình cảm ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 7:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " lười chảy thây, không làm mà vẫn muốn có ăn, sở thích là ngủ dạng háng đến tận trưa ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 8:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " chăm làm, chịu khó , cần cù bù siêng năng những người này sau rất dễ thành công ........ .nhân ");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;

                    case 9:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + " lạnh lùng , ít nói luôn có chính kiến riêng, không theo đám đông,những người này thường hay đưa ra quyết định rất chính xác trong cuộc sống");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;
                        
                    case 10:
                        $("#result").text("Những người tên " + name + " thường là những người có tính cách " + "dâm dê , đê tiện ,sở thích là rất hay ra công viên sờ mông các bạn nam mới lớn.");
                        $('#result').removeClass('spinner-border')
                        $("#result").addClass('bg-secondary')
                        break;
                }
            })
        })

    </script>
</body>