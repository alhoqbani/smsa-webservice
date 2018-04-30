Get AWB in PDF for printing
===========================

This method can be used to get the AWB Copy in PDF format for printing and labeling on shipment.

The method name being used here is “getPDF”. The method signature is as follows.

Public function getPDF(awbNo,passKey)

**Input Parameters**

The input parameter for the method “getPDF” is as follows

| **Name**    | **Data Type** | **Description**                    | **Comment** |
|-------------|---------------|------------------------------------|-------------|
| **awbNo**   | String        | Shipment Tracking Number           | Mandatory   |
| **Passkey** | String        | PassKey Provided for secure access | Mandatory   |

**Output Parameters**

The output is AWB Copy in PDF format of the requested awbNo.
