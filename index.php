<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/lottery.css">
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jQueryRotate.2.2.js"></script>
</head>
<body style="margin:0 auto; width: 960px;">
		

	<div  class="lottery-wheel fl">
        <div class="ly-plate">
            <div class="rotate-bg"></div>
            <div class="lottery-star"  >
                <img src="images/rotate-static.png" style="-webkit-transform:rotate(0deg);-moz-transform: rotate(0deg);-o-transform: rotate(0deg);" />
            </div>
            <p id="lotteryBtn" class="lotteryImg" style="transform: rotate(0deg);"></p>
        </div>
    </div>


<script type="text/javascript">
/*转盘抽奖效果开始*/
    var rotateFunc = function(awards,angle,text){  //awards:奖项，angle:奖项对应的角度
        $('.lottery-star').stopRotate();
        $(".lottery-star").rotate({
            angle:0, 
            duration: 5000, 
            animateTo: angle+1440, //angle是图片上各奖项对应的角度，1440是我要让指针旋转4圈。所以最后的结束的角度就是这样子^^
            callback:function(){
                alert(text)
                 // setTimeout(function(){location.href=location.href},1000);
                //getList()
            }
        }); 
    };
    
    $("#lotteryBtn").rotate({
       bind: 
         { 
            click: function(){
                var time = [0,1];
                   // time = time[Math.floor(Math.random()*time.length)];
                //if(time==0){
                   // timeOut(); //网络超时
                //}
               // if(time==1){
                       // if (!$('#isLogin').val()) {alert('您还没有登录，请登录后再抽奖。');return false;};
                       // if ($('#times').val() == 0) {alert('您的抽奖机会已经用完。');return false;};
                       // $('#lotteryBtn').html('您还有<span>0</span>次抽奖机会');
                       // $('#times').val(0);

                        $.post('get_reward.php', function(data) {
                            
                             if(data==1){
                                 rotateFunc(1,45,'恭喜您抽中苹果5s')
                            }
                            if(data==2){
                                rotateFunc(2,90,'恭喜您抽中现金1000元')
                            }
                            if(data==3){
                                rotateFunc(3,180,'恭喜您抽中现金100元')
                            }
                            if(data==4){
                                rotateFunc(4,225,'恭喜您抽中话费50元')
                            }
                            if(data==5){
                                rotateFunc(5,270,'恭喜您抽中现金10000元')
                            }
                            if(data==6){
                                rotateFunc(6,360,'恭喜您抽中现金500元')
                            }
                            if(data==0){
                                var angle = [135,302];
                                    angle = angle[Math.floor(Math.random()*angle.length)]
                                rotateFunc(0,angle,'vip一年')
                            }
                            
                        });
                //}
            }
         } 
       
    });
    /*转盘抽奖效果开始*/
    

</script>


</body>
</html>