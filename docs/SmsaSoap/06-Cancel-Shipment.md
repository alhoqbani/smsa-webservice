Cancel Shipment
===============

This method can be used to cancel the shipment upon customer request which is possible before the shipment is out for delivery to customer.

The method name being used here is “cancelShipment”. The method signature is as follows.

Public Function cancelShipment(ByVal awbNo As String, ByVal passkey As String) As String

**Input Parameters**

The input parameter for the method “cancelShipment” is as follows.

| **Name**    | **Data Type** | **Description**                    | **Comment** |
|-------------|---------------|------------------------------------|-------------|
| **awbNo**   | String        | Shipment Tracking Number           | Mandatory   |
| **Passkey** | String        | PassKey Provided for secure access | Mandatory   |
| **Reas**    | String        | Reason for cancelling the shipment | Mandatory   |

**Output Parameters**

The Output will be a string whether the cancellation of the shipment was successful or failed with reason.
