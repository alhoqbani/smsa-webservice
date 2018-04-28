Get Tracking
============

This method can be used to get the real-time tracking information of the shipment.

The method name being used here is “getTracking”. The method signature is as follows.

Public function getTracking(awbNo,passKey)

<span id="_Toc306512746" class="anchor"></span>**Input Parameters**

The input parameter for the method “getTracking” is as follows

| **Name**    | **Data Type** | **Description**                    | **Comment** |
|-------------|---------------|------------------------------------|-------------|
| **awbNo**   | String        | Shipment Tracking Number           | Mandatory   |
| **Passkey** | String        | PassKey Provided for secure access | Mandatory   |

<span id="_Toc306512747" class="anchor"></span>**Output Parameters**

The output is object of Dataset with tracking details of the requested awbNo.

It returns three columns as awbno, “DateTime” of the Event, Activity/Scan and Details.
