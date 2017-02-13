1、四个模块
	学生信息--stuinfo
	白名单----whitelist
	数据管理--datamanage
	用户管理--usermanage
2、另有两个目录
	resource--放置资源文件，注意：css js
		文件命名是尽量参考页面名，比如：要给recinfo.html写css，那么最好叫做：recinfo.css
	public----放置导航页面
		导航页面是公共的，内容页面，如recinfo.html
		student.html等每一个都需要导航页面，所以建议把导航页面，写在这个里面，
		在recinfo.html，student.html等页面中用两iframe
		分别显示导航与内容页面，而导航页面就是public目录下的nav.html
