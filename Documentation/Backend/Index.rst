.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt
.. include:: Images.txt

Backend Configuration
=====================

.. contents::
   :local:
   :depth: 1




Create a sys folder for your authors
------------------------------------

Before you can start adding author, you have to create a sys folder for all author datasets.


Add a single author
-------------------
|img-3|

After adding the sys folder you can add a new author object into this folder. Now you are able to add a lot of informations about this single author.
At the moment google+ account url will be used for linking with the default typoscript setup. Add all informations you would like to show in frontend.
If you also show the email address of the author, you have to add the lines commanded out in typoscript setup (lib.authorbottom.renderObj.20.40.10)


Connect the author to page or news record
-----------------------------------------
|img-4|

If you successful add an author in author folder, you can use them in a page or news record. You can find the dropdown for pages in the metadata tab.

