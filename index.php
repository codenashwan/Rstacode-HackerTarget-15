<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-design-system/assets/css/argon-design-system.min.css">
    <link rel="stylesheet"  href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>.radius {border-radius: 20px}</style>
<body class="bg-gradient-indigo">
    <div class="container mt-5">
        <div class="card radius" style="width: 100%;">
            <img src="https://static.dribbble.com/users/1162077/screenshots/2895509/animated-small-server.gif"
                width="400" class="m-auto">
            <div class="card-body text-right" dir="rtl">
                <h5 class="card-title">HackerTarget-API-Tools</h5>
                <h4 class="card-text">تەواوی زانیارییەکانی سێرڤەر تەنها بە دۆمەینێک</h4>
                <hr>
                <p>دۆمەین بنوسە</p>
                <input type="text" placeholder="example.com" class="form-control col-lg-4 shadow-lg border-0 col-sm">
                <br>
            <?php
            $btns = [
                'Traceroute','Ping','DNS','RDNS','DNS Host','Shared','Zone','Whois','iPlookup','RIP','TCP Port',
                'UDP Port','Sub Look','Header','Extract','nMap'
            ];
            foreach($btns as $i => $btn){
                echo '<span onclick="request('.$i.')" class="btn btn-darker m-2">'.$btn.'</span>';
            }
            ?>
            <div class="card p-3 mt-2  radius bg-darker text-left d-none" dir="ltr">
            <h2 class="text-white m-2">Result : </h2>
            <pre class="text-white result" style="word-wrap: break-word; white-space: pre-wrap;"></pre>

            </div>
            <script>
                function request(id){
                    $(".bg-darker").removeClass('d-none');
                    $(".result").html('loading...');
                    var domain = $("input").val();
                    if(domain == ''){
                        $(".result").html('Domain is Empty !');
                    }else{
                    $.post('response.php' , {id:id , domain:domain} , function(response){
                      $(".result").html(response)  
                    })
                    }
                }
            </script>
            </div>
        </div>
    </div>
</body>
</html>