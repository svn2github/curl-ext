||| Copyright (C) 2009, Sumisho Computer Systems Corp.  All Rights Reserved.

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


This project provides an API BackgroundTaskQueue.async-start-task to run
code in a subapplet and get the results back.  This lets an applet run CPU
bound code in a different thread so that it won't block UI interaction, and
it may allow an applet to take full advantage of the power of modern CPUs
that include multiple cores and/or hyper threading.  See its doc-string for
more details on how to call it.  Note that because this uses subapplets the
applet will need to have a Pro server license.

The main package is COM.CURL.EXT.BACKGROUND-TASK which is in load.scurl and
The main code is in BackgroundTaskQueue.scurl, with some classes and procs
also in BackgroundTask.scurl.

The code which is run in the subapplet is in the package
COM.CURL.EXT.BACKGROUND-TASK-REMOTE which is in 
BackgroundTaskRemoteInterfacePackage.scurl, with most of the code in
BackgroundTaskRemoteInterface.scurl.  If you are using this code with 7.0.1
or later, make sure that you deploy the file
BackgroundTaskRemoteInterface.scurl as well the two pcurled packages.  If
you are using it with an older version of the RTE, then you also need the
files BackgroundTaskRemoteInterfacePackage.scurl and
BackgroundTaskSubApplet.curl.

There is a sample in sample/start.curl that demonstrates running CPU
bound calculations in async threads, while keeping the UI active.

There is a test in tests/start.curl that tests the basic functionality of
these APIs.

