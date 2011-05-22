||| Copyright (C) 1998-2011, Sumisho Computer Systems Corp.  All Rights Reserved.
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

======================
 COM.CURL.EXT Library
======================

This directory contains the current release of the Curl Extensions Library.

To install the library, unzip the distribution onto your machine.

The following sections describe the included material in more detail.

The distribution is organized into directories which each serve a
specific purpose.


Deployable Library
-------------------
 
The 'deploy' directory contains a preprocessed library for use in
deployed applications. The zip file contains 3 directories:
  COM.CURL.EXT-Vm.n          Compiled code only, for deployment
  COM.CURL.EXT-Vm.n-doc      Library with documentation - install in CDE
  COM.CURL.EXT-Vm.n-src      Library with source - can be used for debuggng

Each of these directories contains a library manifest at the top level:
COM.CURL.EXT-Vm.n/manifest.mcurl (the COM.CURL.EXT library manifest)

Documentation
--------------

The 'docs-install' directory contains library directories prepared for
addition to the Curl Documentation Viewer using the IDE 'Install
Documentation' command.  The directories include both documentation
and source code, which allows stepping into code in the library.
For example, COM.CURL.EXT-Vm.n-doc/manifest.mcurl is the
COM.CURL.EXT library manifest.


=============
 Source Code
=============

The source code can be checked out from SourceForge. Please refer to
https://sourceforge.net/projects/curl-ext/develop

If you check out the trunk, you will get several directories.

The 'build' directory is where the the library is built by the
deploy tool.

The 'code' directory contains all source code for CURL-EXT modules
and could be used for modifying the library itself. 

The 'lib' directory contains external libraries referenced by
CURL-EXT.

The 'tests' directory contains the automated tests.

The 'tools' directory contains scripts used to build and deploy the
library. You can run the applet deploy.curl to build the library
interactively.

==============
 KNOWN ISSUES
==============

Some of the tests access web content or invoke web services,
and thus require privilege and web access to succeed.

=========
 CHANGES
=========

0.7 Release (May 2011)
  o Added package COM.CURL.EXT.VIEW-ANIMATION
  o Minor bug fixes

0.6 Release (April 2011)
  o Added package COM.CURL.EXT.SPLASH-SCREEN
  o Added package COM.CURL.EXT.SPLASH-ANIMATION
  o Added package COM.CURL.EXT.TRANSITION-LIBRARY
  o Added package COM.CURL.EXT.GEOGRAPHIC
  o Added tests, documentation, and fixed bugs in COM.CURL.EXT.WORKSHEET
  o Refactored some of the Worksheet APIs, espcially the constructor.
    Added CellSpec and subclasses to improve declarative worksheet
    construction.

0.5 Release (January 2011)
  o Worksheet
    o Support manual adjustment of row heights and column widths
    o Support frozen-rows, frozen-columns
    o Support internal scrollbars
    o Remove the static row and column headers
    o Pay attention to vertical-grid-line-width and horizontal-grid-line-width
    o Pay attention to alternate-row-background
  o JsonRecordSet

0.4 Release
  o Added DisclosingFrame - a container that can show either
    a label or content, with a disclosure triangle to switch
  o Added NumberDomain, CurrencyDomain, LocaleDateDomain, 
  o Added CurrencyCell
  o DefaultDiscloser changed to recognize clicks and fire Adjustment
    events at self.
  o Added OrderedSet-of
