Get Status
==========

This method can be used to get the real-time Status information of the shipment.

The method name being used here is “getStatus”. The method signature is as follows.

Public function getStatus(awbNo,passKey)

**Input Parameters**

The input parameter for the method “getStatus” is as follows

| **Name**    | **Data Type** | **Description**                    | **Comment** |
|-------------|---------------|------------------------------------|-------------|
| **awbNo**   | String        | Shipment Tracking Number           | Mandatory   |
| **Passkey** | String        | PassKey Provided for secure access | Mandatory   |

**Output Parameters**

The output is String of Current Status details of the requested awbNo.
