var pre = document.getElementsByTagName('pre')[0];
var txt = pre.innerHTML;
txt = txt.replace('@benjacob', '<a target="_blank" href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fabout.twitter.com%2Fresources%2Fbuttons&screen_name=benjacob&tw_p=followbutton&variant=2.0">@benjacob</a>');
txt = txt.replace('in/benjacob', '<a target="_blank" href="https://www.linkedin.com/in/benjacob">in/benjacob</a>');
txt = txt.replace('<mailto>', '<a href="mailto:hello@benjacob.in?Subject=Website%20enquiry" target="_top">hello@benjacob.in</a>');

txt = txt.replace('-x-', 'mail');
txt = txt.replace('x-', '@');
txt = txt.replace('xxx-', 'ben');
txt = txt.replace('xxxx', 'jacob');
txt = txt.replace('-x-', '.in');
pre.innerHTML = txt;
