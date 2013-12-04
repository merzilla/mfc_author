.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


Extension Configuration
===============================

.. contents::
   :local:
   :depth: 1




Install and activate the extension
----------------------------------

Install and activate the mfc_author extension.


Add the static typoscript
-------------------------

Add our static typoscript in order to can start with the extension


Adapte the options on your site
-------------------------------
There are many options to adapte the extension on your site:

::

	plugin.mfc_author {
		author_folder =
		author_image.maxW = 80
		author_image.maxH = 80
		useDefaultCSS = 0
		defaultCSSFile = EXT:mfc_author/Resources/Public/Stylesheets/mfc_author.css
		insertObjectPosition = page.10.subparts.CONTENT.75
	}

It is recommended to adapte the following two options:

1. Set the folder for the author datasets: After creating the sys folder for your author datasets, you should add the id of the folder in the
typoscript constants at author_folder.

2. Select the name of your content object: The value for insertObjectPosition is reserved for the position/name where the author box would be in
your content. If you use subparts, a possible value would be page.10.subparts.CONTENT.75.


If you would like to use our example css files, you can set the constant useDefaultCSS to 1.
