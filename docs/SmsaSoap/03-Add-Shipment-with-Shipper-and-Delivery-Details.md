Add Shipment with Shipper and Delivery Details
==============================================

This method can be used to upload the shipment information to SMSA Server.

The method name being used here is “addShip”. The method signature is as follows.

Public Function addShip(ByVal passKey As String, ByVal refNo As String, ByVal sentDate As String, ByVal idNo As String, ByVal cName As String, ByVal cntry As String, ByVal cCity As String, ByVal cZip As String, ByVal cPOBox As String, ByVal cMobile As String, ByVal cTel1 As String, ByVal cTel2 As String, ByVal cAddr1 As String, ByVal cAddr2 As String, ByVal shipType As String, ByVal PCs As Integer, ByVal cEmail As String, ByVal carrValue As String, ByVal carrCurr As String, ByVal codAmt As String, ByVal weight As String, ByVal custVal As String, ByVal custCurr As String, ByVal insrAmt As String, ByVal insrCurr As String, ByVal itemDesc As String, ByVal sName As String, ByVal sContact As String, ByVal sAddr1 As String, ByVal sAddr2 As String, ByVal sCity As String, ByVal sPhone As String, ByVal sCntry As String, ByVal prefDelvDate As String, ByVal gpsPoints As String) As String

**Input Parameters**

The input parameters for the method “addShip” are as follows.

| **Name**     | **Data Type** | **Description**                         | **Comment**                                                                  |
|--------------|---------------|-----------------------------------------|------------------------------------------------------------------------------|
| passKey      | String        | Will be provided upon Request           | Unique Code for each Customer provided by SMSA                               |
| refNo        | String        | Cannot be Null                          | Unique Number for each day                                                   |
| sentDate     | String        | Date                                    |                                                                              |
| idNo         | String        | Optional                                |                                                                              |
| cName        | String        | Cannot be Null                          |                                                                              |
| Cntry        | String        | Country                                 | KSA                                                                          |
| cCity        | String        | Destination City Name                   |                                                                              |
| cZip         | String        | Optional Zip Code                       |                                                                              |
| cPOBox       | String        | Optional PO Box                         |                                                                              |
| cMobile      | String        | Mandatory                               | Must be at least 9 digits                                                    |
| cTel1        | String        | Optional                                |                                                                              |
| cTel2        | String        | Optional                                |                                                                              |
| cAddr1       | String        | Address Line 1                          | Either of Address fields to be filled duly                                   |
| cAddr2       | String        | Address Line 2                          |                                                                              |
| shipType     | String        | Mandatory Value from DLV,VAL,HAL or BLT | DLV for normal Shipments for other special cases we will provide             |
| PCs          | Integer       | Mandatory Integer                       | No. of Pieces                                                                |
| cEmail       | String        | Optional                                |                                                                              |
| carrValue    | Integer       | Optional                                | Carriage Value                                                               |
| carrCurr     | String        | Optional                                | Carriage Currency                                                            |
| codAmt       | Integer       | Required if CASH ON DELIVERY            | Value Either 0 or greater than 0 in case of COD                              |
| weight       | String        | Weight of the Shipment                  |                                                                              |
| custVal      | String        | Optional                                | Customs Value                                                                |
| custCurr     | String        | Optional                                | Customs Currency                                                             |
| insrAmt      | String        | Optional                                | Insurance Value                                                              |
| insrCurr     | String        | Optional                                | Insurance Currency                                                           |
| itemDesc     | String        | Optional                                | Description of the items present in shipment                                 |
| sName        | String        | Mandatory                               | Shipper Name                                                                 |
| sContact     | String        | Mandatory                               | Shipper Contact name                                                         |
| sAddr1       | String        | Mandatory                               | Shipper Address                                                              |
| sAddr2       | String        | Optional                                | Shipper Address                                                              |
| sCity        | String        | Mandatory                               | Shipper City                                                                 |
| sPhone       | String        | Mandatory                               | Shipper Phone number                                                         |
| sCntry       | String        | Mandatory                               | Shipper country                                                              |
| prefDelvDate | Date          | Optional                                | Preferred Delivery date in case of future or delayed delivery                |
| gpsPoints    | String        | Optional                                | Google GPS points separated by comma for delivery to customer by Google maps |

**Output Parameters**

The output is a String whether the shipment information Upload was Success or failed with reason.

If the data upload to our system was successful it will return the SMSA Airway bill Number which has to be displayed on the shipment with barcode.
