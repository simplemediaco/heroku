<!DOCTYPE html>
<html>
<head> 
	
  {% include 'header.html' %}
  
</head>

<body  class="home page page-id-28 page-template-default">
<div id="wrapper" class="hfeed"><div class="wrap-top"><div class="wrap-btm"><div class="wrap-bg">

  {% include 'nav.html' %}
	{% include 'slider.php' %}
  {% block content %}{% endblock %}
   {% include 'footer.html' %}
  </div>
</body>
</html>
