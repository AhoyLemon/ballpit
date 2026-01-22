$("img.avatar, img.bbc_img").each(function(){
  var e=$(this).attr("src");
  $(this).attr("data-truesrc",e);
  $(this).addClass("slowed").attr("src","https://www.battleforthenet.com/images/change_avatar/avatar-red.gif");
});

$("#top_banner").after('<div style="background-color:#f93c3d;color:#fff;font-size:16px;line-height: 110%;padding: 0.5em 2em;text-align: center;" id="InternetSlowdownBanner"><a style="color:yellow;" href="https://twitter.com/search?q=%23InternetSlowdown">#InternetSlowdown</a> is today. Expect terrible website performance while we prepare the internet the cable companies want. <a style="color:yellow;" href="https://www.battleforthenet.com/?from=banner">Learn more</a>.</div>');
//$("#top_banner").after('<div>Test</div>');

console.log('slowdown loaded 11:04');