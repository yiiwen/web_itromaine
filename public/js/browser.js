//获取当前页面的location对象
const pathName = document.location.pathname;
//获取当前页面宽度
const winWidth = window.screen.width;
//如果页面尺寸小于1024，那么跳转到移动端页面
if (winWidth <= 1024) {
    if (!pathName.startsWith("/m/"))
    {
        window.location.href = "/m" + pathName;
    }
}
//如果页面尺寸大于1024，那么跳转到PC端页面
if (winWidth > 1024)
{
    if (pathName.startsWith("/m/"))
    {
        window.location.href = pathName.replace("/m/","/");
    }
}