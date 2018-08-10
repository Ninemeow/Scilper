<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>点击头像更有趣哦</title>
<link href='../Siren-master/style.css' rel='stylesheet' />
<script src="../Siren-master/js/jquery.min.js" type="text/javascript"></script>
<script src="../Siren-master/js/nprogress.js" type="text/javascript"></script>


</head>

<body>
		
	
<script>
    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);

  </script>








<div class="relative">
<img  class="tiaodan2hao" onClick="rbq()" src="images/head.png" alt="">


</div>
<div class="typed-cursor" >请用浏览器打开点击图像食用</div>
<div>45435345</div>
<p id="chakhsu"></p>



<script>

var chakhsu = function(r) {
		function t() {
			return b[Math.floor(Math.random() * b.length)]
		}
		function e() {
			return String.fromCharCode(94 * Math.random() + 33)
		}
		function n(r) {
			for (var n = document.createDocumentFragment(), i = 0; r > i; i++) {
				var l = document.createElement("span");
				l.textContent = e(), l.style.color = t(), n.appendChild(l)
			}
			return n
		}
		function i() {
			var t = o[c.skillI];
			c.step ? c.step-- : (c.step = g, c.prefixP < l.length ? (c.prefixP >= 0 && (c.text += l[c.prefixP]), c.prefixP++) : "forward" === c.direction ? c.skillP < t.length ? (c.text += t[c.skillP], c.skillP++) : c.delay ? c.delay-- : (c.direction = "backward", c.delay = a) : c.skillP > 0 ? (c.text = c.text.slice(0, -1), c.skillP--) : (c.skillI = (c.skillI + 1) % o.length, c.direction = "forward")), r.textContent = c.text, r.appendChild(n(c.prefixP < l.length ? Math.min(s, s + c.prefixP) : Math.min(s, t.length - c.skillP))), setTimeout(i, d)
		}
		var l = "I work with ",
			o = ["Front-End", "JavaScript", "HTML & CSS", "Node.js", "React", "passion & love"].map(function(r) {
				return r + "."
			}),
			a = 2,
			g = 1,
			s = 5,
			d = 75,
			b = ["rgb(110,64,170)", "rgb(150,61,179)", "rgb(191,60,175)", "rgb(228,65,157)", "rgb(254,75,131)", "rgb(255,94,99)", "rgb(255,120,71)", "rgb(251,150,51)", "rgb(226,183,47)", "rgb(198,214,60)", "rgb(175,240,91)", "rgb(127,246,88)", "rgb(82,246,103)", "rgb(48,239,130)", "rgb(29,223,163)", "rgb(26,199,194)", "rgb(35,171,216)", "rgb(54,140,225)", "rgb(76,110,219)", "rgb(96,84,200)"],
			c = {
				text: "",
				prefixP: -s,
				skillI: 0,
				skillP: 0,
				direction: "forward",
				delay: a,
				step: g
			};
		i()
	};
chakhsu(document.getElementById('chakhsu'));
if ('addEventListener' in document) {
	document.addEventListener('DOMContentLoaded', function() {
		FastClick.attach(document.body);
	}, false);
}
</script>







<script>

function rbq() { 
    var audio = document.createElement('audio');
    var body = document.body;
    audio.src = "mic/woodpecker.mp3"; //你的声音地址
    audio.autoplay = true;
    body.appendChild(audio);
    audio.addEventListener('ended', function() {
        body.removeChild(audio);  // 播放完毕后从HTML中删除该音频
    }, false);
}
</script>
<style>
.relative{
	align:center;
	}
	

/**-
光标闪烁动画
-**/
.typed-cursor {
	color: #000;
}
.typed-cursor {
	opacity: 1;
	-webkit-animation: i .7s infinite;
	animation: i .7s infinite
}

@keyframes i {
	0% {
		opacity: 1
	}

	50% {
		opacity: 0
	}

	to {
		opacity: 1
	}
}

@-webkit-keyframes i {
	0% {
		opacity: 1
	}

	50% {
		opacity: 0
	}

	to {
		opacity: 1
	}
}


/**-
跳动动画
-**/
.tiaodan {
	display: inline-block;
	-webkit-transform-origin: center center;
	transform-origin: center center -webkit-animation-name: tiaodan-slow;
	-ms-transform-origin: center center;
	-ms-animation-name: tiaodan-slow;
	animation-name: tiaodan-slow;
	-webkit-animation-duration: 5s;
	-ms-animation-duration: 5s;
	animation-duration: 5s;
	-webkit-animation-iteration-count: infinite;
	-ms-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	-webkit-animation-timing-function: ease-in-out;
	-ms-animation-timing-function: ease-in-out;
	animation-timing-function: ease-in-out;
	-webkit-animation-delay: 0s;
	-ms-animation-delay: 0s;
	animation-delay: 0s;
	-webkit-animation-play-state: running;
	-ms-animation-play-state: running;
	animation-play-state: running
}

.tiaodan2hao {
	
	align-content: center;
	font-size: 66px;
	display: inline-block;
	-webkit-transform-origin: center center;
	transform-origin: center center text-align:center font-style:normal;
	-ms-transform-origin: center center
}

.tiaodan2hao:hover {
	-webkit-animation-name: tiaodan-slow;
	-ms-animation-name: tiaodan-slow;
	animation-name: tiaodan-slow;
	-webkit-animation-duration: 5s;
	-ms-animation-duration: 5s;
	animation-duration: 5s;
	-webkit-animation-iteration-count: infinite;
	-ms-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	-webkit-animation-timing-function: ease-in-out;
	-ms-animation-timing-function: ease-in-out;
	animation-timing-function: ease-in-out;
	-webkit-animation-delay: 0s;
	-ms-animation-delay: 0s;
	animation-delay: 0s;
	-webkit-animation-play-state: running;
	-ms-animation-play-state: running;
	animation-play-state: running text-align:center
}

@-webkit-keyframes tiaodan-slow{0%{-webkit-transform:translate(0,0) rotate(0)}
2%{-webkit-transform:translate(-1px,3px) rotate(1.5deg)}
4%{-webkit-transform:translate(2.3px,0) rotate(-.5deg)}
6%{-webkit-transform:translate(3px,3px) rotate(-3.5deg)}
8%{-webkit-transform:translate(-2.3px,-2px) rotate(-1.5deg)}
10%{-webkit-transform:translate(3px,0) rotate(-2.5deg)}
12%{-webkit-transform:translate(-2.3px,-2px) rotate(-3.5deg)}
14%{-webkit-transform:translate(3px,2.3px) rotate(2.5deg)}
16%{-webkit-transform:translate(3px,-3px) rotate(-1.5deg)}
18%{-webkit-transform:translate(2.3px,-2.3px) rotate(-3.5deg)}
20%{-webkit-transform:translate(2px,1px) rotate(-.5deg)}
22%{-webkit-transform:translate(2.3px,3px) rotate(-2.5deg)}
24%{-webkit-transform:translate(-3px,-1px) rotate(2.5deg)}
26%{-webkit-transform:translate(2.3px,-2.3px) rotate(.5deg)}
28%{-webkit-transform:translate(2.3px,-2.3px) rotate(-3.5deg)}
30%{-webkit-transform:translate(-1.3px,-2.3px) rotate(-1.5deg)}
32%{-webkit-transform:translate(-1px,0) rotate(2.5deg)}
34%{-webkit-transform:translate(2.3px,1.3px) rotate(-.5deg)}
36%{-webkit-transform:translate(1.3px,2.3px) rotate(1.5deg)}
38%{-webkit-transform:translate(1.3px,-2.3px) rotate(1.5deg)}
40%{-webkit-transform:translate(-3px,-1px) rotate(-.5deg)}
42%{-webkit-transform:translate(-3px,1.3px) rotate(-.5deg)}
44%{-webkit-transform:translate(-2.3px,2px) rotate(.5deg)}
46%{-webkit-transform:translate(-2.3px,-1.3px) rotate(-.5deg)}
48%{-webkit-transform:translate(1px,2.3px) rotate(1.5deg)}
50%{-webkit-transform:translate(2.3px,2.3px) rotate(1.5deg)}
52%{-webkit-transform:translate(-3px,2.3px) rotate(.5deg)}
54%{-webkit-transform:translate(2.3px,-3px) rotate(-2.5deg)}
56%{-webkit-transform:translate(1.3px,-2.3px) rotate(-2.5deg)}
58%{-webkit-transform:translate(-1.3px,-2.3px) rotate(.5deg)}
60%{-webkit-transform:translate(1.3px,2.3px) rotate(-.5deg)}
62%{-webkit-transform:translate(0,0) rotate(-1.5deg)}
64%{-webkit-transform:translate(-2.3px,-2.3px) rotate(-3.5deg)}
66%{-webkit-transform:translate(2.3px,-2.3px) rotate(.5deg)}
68%{-webkit-transform:translate(0,-2.3px) rotate(-2.5deg)}
70%{-webkit-transform:translate(-2.3px,1px) rotate(1.5deg)}
72%{-webkit-transform:translate(-2.3px,2.3px) rotate(2.5deg)}
74%{-webkit-transform:translate(1.3px,-2.3px) rotate(-.5deg)}
76%{-webkit-transform:translate(3px,1px) rotate(-.5deg)}
78%{-webkit-transform:translate(-1px,3px) rotate(2.5deg)}
80%{-webkit-transform:translate(2px,2.3px) rotate(2.5deg)}
82%{-webkit-transform:translate(-2.3px,-2.3px) rotate(-.5deg)}
84%{-webkit-transform:translate(-3px,3px) rotate(-2.5deg)}
86%{-webkit-transform:translate(3px,2px) rotate(-2.5deg)}
88%{-webkit-transform:translate(-3px,2px) rotate(-1.5deg)}
90%{-webkit-transform:translate(-2.3px,-2.3px) rotate(-3.5deg)}
92%{-webkit-transform:translate(-3px,2.3px) rotate(2.5deg)}
94%{-webkit-transform:translate(-2.3px,-2.3px) rotate(-3.5deg)}
96%{-webkit-transform:translate(-2px,1.3px) rotate(-3.5deg)}
98%{-webkit-transform:translate(1.3px,1px) rotate(-.5deg)}
}
@-ms-keyframes tiaodan-slow{0%{-ms-transform:translate(0,0) rotate(0)}
2%{-ms-transform:translate(-2.3px,1px) rotate(-1.5deg)}
4%{-ms-transform:translate(-2.3px,-1px) rotate(-3.5deg)}
6%{-ms-transform:translate(2.3px,1.3px) rotate(-1.5deg)}
8%{-ms-transform:translate(-2px,-2.3px) rotate(-1.5deg)}
10%{-ms-transform:translate(-2.3px,-2px) rotate(-.5deg)}
12%{-ms-transform:translate(-3px,2.3px) rotate(-2.5deg)}
14%{-ms-transform:translate(2.3px,3px) rotate(-1.5deg)}
16%{-ms-transform:translate(1.3px,1.3px) rotate(1.5deg)}
18%{-ms-transform:translate(3px,-1.3px) rotate(-3.5deg)}
20%{-ms-transform:translate(-2.3px,2px) rotate(-3.5deg)}
22%{-ms-transform:translate(3px,-2.3px) rotate(-1.5deg)}
24%{-ms-transform:translate(-1px,-2.3px) rotate(2.5deg)}
26%{-ms-transform:translate(2.3px,2.3px) rotate(-.5deg)}
28%{-ms-transform:translate(2.3px,-2.3px) rotate(-3.5deg)}
30%{-ms-transform:translate(2.3px,-2.3px) rotate(-.5deg)}
32%{-ms-transform:translate(2.3px,1.3px) rotate(1.5deg)}
34%{-ms-transform:translate(2px,-2.3px) rotate(2.5deg)}
36%{-ms-transform:translate(-2.3px,-2.3px) rotate(2.5deg)}
38%{-ms-transform:translate(-3px,-2.3px) rotate(.5deg)}
40%{-ms-transform:translate(2.3px,2.3px) rotate(-2.5deg)}
42%{-ms-transform:translate(3px,-3px) rotate(.5deg)}
44%{-ms-transform:translate(3px,3px) rotate(-3.5deg)}
46%{-ms-transform:translate(-1.3px,2.3px) rotate(1.5deg)}
48%{-ms-transform:translate(-2.3px,-3px) rotate(-2.5deg)}
50%{-ms-transform:translate(3px,-1px) rotate(-3.5deg)}
52%{-ms-transform:translate(-3px,-2.3px) rotate(2.5deg)}
54%{-ms-transform:translate(2.3px,0) rotate(2.5deg)}
56%{-ms-transform:translate(-3px,-1px) rotate(-.5deg)}
58%{-ms-transform:translate(0,-2.3px) rotate(-3.5deg)}
60%{-ms-transform:translate(-2.3px,1.3px) rotate(2.5deg)}
62%{-ms-transform:translate(2.3px,3px) rotate(.5deg)}
64%{-ms-transform:translate(-2.3px,-2.3px) rotate(-1.5deg)}
66%{-ms-transform:translate(-1px,-2.3px) rotate(-.5deg)}
68%{-ms-transform:translate(-2.3px,-2.3px) rotate(-2.5deg)}
70%{-ms-transform:translate(-2.3px,-3px) rotate(-1.5deg)}
72%{-ms-transform:translate(-1.3px,-2px) rotate(-2.5deg)}
74%{-ms-transform:translate(-3px,1px) rotate(-.5deg)}
76%{-ms-transform:translate(-2.3px,2.3px) rotate(2.5deg)}
78%{-ms-transform:translate(2.3px,1.3px) rotate(-3.5deg)}
80%{-ms-transform:translate(-2.3px,-2.3px) rotate(-.5deg)}
82%{-ms-transform:translate(1.3px,-2.3px) rotate(1.5deg)}
84%{-ms-transform:translate(2px,3px) rotate(1.5deg)}
86%{-ms-transform:translate(3px,1.3px) rotate(2.5deg)}
88%{-ms-transform:translate(-3px,-1px) rotate(-1.5deg)}
90%{-ms-transform:translate(-1px,-2.3px) rotate(1.5deg)}
92%{-ms-transform:translate(3px,-2.3px) rotate(-3.5deg)}
94%{-ms-transform:translate(2.3px,-2.3px) rotate(-2.5deg)}
96%{-ms-transform:translate(2.3px,-3px) rotate(2.5deg)}
98%{-ms-transform:translate(3px,0) rotate(-3.5deg)}
}
@keyframes tiaodan-slow{0%{transform:translate(0,0) rotate(0)}
2%{transform:translate(-2.3px,-3px) rotate(2.5deg)}
4%{transform:translate(2px,-2.3px) rotate(-.5deg)}
6%{transform:translate(2px,-3px) rotate(2.5deg)}
8%{transform:translate(0,3px) rotate(.5deg)}
10%{transform:translate(2px,1.3px) rotate(.5deg)}
12%{transform:translate(3px,0) rotate(.5deg)}
14%{transform:translate(2.3px,2.3px) rotate(-3.5deg)}
16%{transform:translate(-2.3px,0) rotate(-.5deg)}
18%{transform:translate(1px,2px) rotate(-1.5deg)}
20%{transform:translate(-3px,-1px) rotate(-3.5deg)}
22%{transform:translate(3px,2.3px) rotate(2.5deg)}
24%{transform:translate(-2.3px,-2.3px) rotate(-2.5deg)}
26%{transform:translate(0,2.3px) rotate(-1.5deg)}
28%{transform:translate(-2.3px,2.3px) rotate(2.5deg)}
30%{transform:translate(3px,-2.3px) rotate(-1.5deg)}
32%{transform:translate(0,-3px) rotate(-.5deg)}
34%{transform:translate(2.3px,2.3px) rotate(-.5deg)}
36%{transform:translate(-2.3px,2.3px) rotate(.5deg)}
38%{transform:translate(3px,-2.3px) rotate(-.5deg)}
40%{transform:translate(3px,0) rotate(.5deg)}
42%{transform:translate(0,-1.3px) rotate(1.5deg)}
44%{transform:translate(3px,-1.3px) rotate(-.5deg)}
46%{transform:translate(1px,-2.3px) rotate(-2.5deg)}
48%{transform:translate(2.3px,-1px) rotate(2.5deg)}
50%{transform:translate(-3px,-2.3px) rotate(2.5deg)}
52%{transform:translate(2px,1.3px) rotate(-3.5deg)}
54%{transform:translate(1px,-2.3px) rotate(-.5deg)}
56%{transform:translate(-2px,-2.3px) rotate(-.5deg)}
58%{transform:translate(-2.3px,-2.3px) rotate(2.5deg)}
60%{transform:translate(3px,2.3px) rotate(-3.5deg)}
62%{transform:translate(2.3px,-2.3px) rotate(-3.5deg)}
64%{transform:translate(-3px,3px) rotate(-.5deg)}
66%{transform:translate(1px,-2px) rotate(.5deg)}
68%{transform:translate(-2.3px,2.3px) rotate(1.5deg)}
70%{transform:translate(-3px,3px) rotate(-1.5deg)}
72%{transform:translate(-2.3px,-1.3px) rotate(2.5deg)}
74%{transform:translate(0,-2.3px) rotate(1.5deg)}
76%{transform:translate(-1.3px,-3px) rotate(.5deg)}
78%{transform:translate(-1.3px,2.3px) rotate(-3.5deg)}
80%{transform:translate(2.3px,2.3px) rotate(-3.5deg)}
82%{transform:translate(-1px,-2.3px) rotate(-1.5deg)}
84%{transform:translate(2px,-2.3px) rotate(.5deg)}
86%{transform:translate(2.3px,-3px) rotate(-1.5deg)}
88%{transform:translate(2.3px,-2.3px) rotate(1.5deg)}
90%{transform:translate(1px,-2.3px) rotate(2.5deg)}
92%{transform:translate(-3px,-1px) rotate(-1.5deg)}
94%{transform:translate(-2.3px,-1px) rotate(.5deg)}
96%{transform:translate(-2.3px,2.3px) rotate(1.5deg)}
98%{transform:translate(2.3px,2.3px) rotate(-.5deg)}
}
</style>
</body>
</html>