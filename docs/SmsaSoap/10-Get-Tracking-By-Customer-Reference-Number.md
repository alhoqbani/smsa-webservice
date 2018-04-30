Get Tracking By Customer Reference Number
=========================================

This method can be used to get the real-time tracking information of the shipment.
____
The method name being used here is “getTrackingByRef”. The method signature is as follows.

Public function getTrackingByRef(refNo,passKey)

**Input Parameters**

The input parameter for the method “getTrackingByRef” is as follows

| **Name**    | **Data Type** | **Description**                    | **Comment** |
|-------------|---------------|------------------------------------|-------------|
| **refNo**   | String        | Customer Reference Number          | Mandatory   |
| **Passkey** | String        | PassKey Provided for secure access | Mandatory   |

**Output Parameters**

The output is object of Dataset with tracking details of the requested awbNo.

It returns three columns as awbno, “DateTime” of the Event, Activity/Scan and Details.
