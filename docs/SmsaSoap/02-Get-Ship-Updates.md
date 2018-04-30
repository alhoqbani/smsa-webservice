Get Ship Updates
================

This method can be invoked 4-5 times daily to get the latest updates about all the Client Shipments received by SMSA.

The method name being used here is “getShipUpdates”. The method signature is as follows.

Public function getShipUpdates(rowId,passKey)

**Input Parameters**

The input parameter for the method “getShipUpdates” is as follows.

| **Name**    | **Data Type** | **Description**                      | **Comment** |
|-------------|---------------|--------------------------------------|-------------|
| **rowId**   | Integer       | Maximum rowId of the previous update | Mandatory   |
| **passKey** | String        | PassKey Provided for secure access   | Mandatory   |

**Output Parameters**

The output is object of Dataset with tracking details of the requested awbNo.

It returns three columns as rowId,awbno, “DateTime” of the Event, Activity/Scan and Details.
