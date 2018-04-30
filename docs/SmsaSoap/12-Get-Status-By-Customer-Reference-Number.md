Get Status By Customer Reference Number
=======================================

This method can be used to get the realtime Status information of the shipment.

The method name being used here is “getStatus**ByRef**”. The method signature is as follows.

Public function getStatusByRef(refNo,passKey)

**Input Parameters**

The input parameter for the method “getStatusByRef” is as follows

| **Name**    | **Data Type** | **Description**                    | **Comment** |
|-------------|---------------|------------------------------------|-------------|
| **refNo**   | String        | Customer Reference Number          | Mandatory   |
| **Passkey** | String        | PassKey Provided for secure access | Mandatory   |

**Output Parameters**

The output is String of Current Status details of the requested refNo.
