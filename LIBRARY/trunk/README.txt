||| Copyright (C) 1998-2009, Sumisho Computer Systems Corp.  All Rights Reserved.
|||
||| An OpenCurl project.

||| Licensed under the Apache License, Version 2.0 (the "License");
||| you may not use this file except in compliance with the License.
||| You may obtain a copy of the License at
||| 
|||     http://www.apache.org/licenses/LICENSE-2.0
||| 
||| Unless required by applicable law or agreed to in writing, software
||| distributed under the License is distributed on an "AS IS" BASIS,
||| WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
||| See the License for the specific language governing permissions and
||| limitations under the License.

=====================
COM.CURL.EXT Library
=====================

This directory contains the current release of the Curl Extensions Library

To install the library, unzip the distribution onto your machine.

The following sections describe the included material in more detail.


DIRECTORIES
====================

The distribution is organized into directories which each serve a
specific purpose.


Deployable Library
--------------------
 
The 'deploy' directory contains a preprocessed library 
for use in deployed applications.

- COM.CURL.WSDK.2.0/manifest.mcurl   	WSDK library definition

Documentation
--------------------

The 'docs-install' directory contains library directories prepared for
addition to the Curl Documentation Viewer using the IDE 'Install
Documentation' command.  The directories include both documentation
and preprocessed library.

- COM.CURL.WSDK.2.0/manifest.mcurl   	WSDK library doc definition

Source Code
--------------------

The 'src' directory contains all source code for WSDK modules,
and could be used for modifying the WSDK itself. 
It also includes test suites, and some sample applets.

- code		source code
-- code/project.cprj	Curl IDE project

- lib		preprocessed library
-- WSDK/manifest.mcurl	WSDK library definition

- tests		test suite
-- start-tests.curl	test suite

- build		build applets

Tool Installation
--------------------

The 'docs-install' directory also contains a WSDL Service 
tool prepared for addition to the Curl IDE using the 
IDE 'Tools>Configure Editors...' command.

- docs/en/dguide/tools/wsdl/editor-info.txt   	WSDK tool definition

Note: The WSDL IDE Tool must be installed using the files installed
with the Curl Documentation Viewer.  This assures it has access to the
necessary libraries.  The 'WSDK Web Services' chapter contains
the necessary filename for the installed documentation.

If an earlier version of WSDL Services IDE tool has been installed, 
it must be replaced with the version in this distribution, 
in order to function with the Curl Version 7.0 IDE. 
The generated service packages will be marked with the 
curl version defined by their project. 

Prerequisites
--------------------

WSDK 2.0 depends on the CURL-UTIL library.

* CURL-UTIL Documentation must be installed for WSDK documentation,
  including WSDL IDE Tool, to function properly.

* CURL-UTIL Library must be accessible as a delegate from the root
  manifest of applications using WSDK Library.

For installatiuon convenience, a CURL-UTIL distribution may be
included in this directory.


KNOWN ISSUES
====================

Some of the tests access web content or invoke web services,
and thus require privilege and web access to succeed.

CHANGES
====================

0.4 Release

  o FileApp refactored to support storage in the cloud (WebApp)
  o Support http locations in PersistedLocation
  o Added DisclosingFrame - a container that can show either
    a label or content, with a disclosure triangle to switch
