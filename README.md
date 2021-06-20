# Instructions

1. You must create a class extending FeedParserBase following Object Oriented Programming Best Practices
2. This class must load the feed products.xml throught method 'parse'. Feed location must be set in var $_strFeedUrl.
3. Class must have proper exception handling
4. Your code should be able to be executed via CLI (php index.php)
5. Your class should return an array of Product objects (Product class and a proper namespace must be created) with name, url, and date (in Y-m-d H:i:s)
6. Generally speaking, the more decoupled your code, the better, so do not hesitate to create as many classes and namespaces as you wish

# XML Example file

```xml
<item>
	<title>Marques de Riscal Vino Tinto Reserva D.O. Rioja</title>
	<link>https://www.gourmethunters.com/es/Marqu%C3%A9s+de+Riscal+Reserva+2015</link>
	<pubDate>Mon, 10 Sep 2011 17:20:00 +0100</pubDate>
</item>
```

And Product object should look like

name: Marqués de Riscal Vino Tinto Reserva D.O. Rioja
date: 2011-09-10 17:20:00
url: https://www.gourmethunters.com/es/Marqu%C3%A9s+de+Riscal+Reserva+2015

