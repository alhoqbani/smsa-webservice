Return Shipment from Buyer
==========================

This method can be used to return the shipment from customer after the delivery of a shipment.

The method name being used here is “stoShipment”. The method signature is as follows.

Public Function stoShipment(ByVal awbNo As String, ByVal passkey As String) As String

**Input Parameters**

The input parameter for the method “stoShipment” is as follows.

| **Name**    | **Data Type** | **Description**                                                  | **Comment** |
|-------------|---------------|------------------------------------------------------------------|-------------|
| **awbNo**   | String        | Shipment Tracking Number which was delivered to customer earlier | Mandatory   |
| **passkey** | String        | PassKey Provided for secure access                               | Mandatory   |

**Output Parameters**

The Output will be a string whether the request for Return to Origin of a shipment was successful or failed with reason.

If this method is successful it will return the new AWB which can be used to track the shipment returning from Customer.
