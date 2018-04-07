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

Add Shipment with Shipper and Delivery Details
==============================================

This method can be used to upload the shipment information to SMSA Server.

The method name being used here is “addShipMPS”. The method signature is as follows.

Public Function addShipMPS’(ByVal passKey As String, ByVal refNo As String, ByVal sentDate As String, ByVal idNo As String, ByVal cName As String, ByVal cntry As String, ByVal cCity As String, ByVal cZip As String, ByVal cPOBox As String, ByVal cMobile As String, ByVal cTel1 As String, ByVal cTel2 As String, ByVal cAddr1 As String, ByVal cAddr2 As String, ByVal shipType As String, ByVal PCs As Integer, ByVal cEmail As String, ByVal carrValue As String, ByVal carrCurr As String, ByVal codAmt As String, ByVal weight As String, ByVal custVal As String, ByVal custCurr As String, ByVal insrAmt As String, ByVal insrCurr As String, ByVal itemDesc As String, ByVal sName As String, ByVal sContact As String, ByVal sAddr1 As String, ByVal sAddr2 As String, ByVal sCity As String, ByVal sPhone As String, ByVal sCntry As String, ByVal prefDelvDate As String, ByVal gpsPoints As String) As String

**Input Parameters**

The input parameters for the method “addShipMPS” are as follows.

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

If the data upload to our system was successful it will return the SMSA Airway bill Number which has to be displayed on the shipment with barcode also it will have the child shipment AWB numbers.

Add Shipment without Shipper and delivery details
=================================================

This method can be used to upload the shipment information to SMSA Server.

The method name being used here is “addShipment”. The method signature is as follows.

Public Function addShipment(ByVal passKey As String, ByVal refNo As String, ByVal sentDate As String, ByVal idNo As String, ByVal cName As String, ByVal cntry As String, ByVal cCity As String, ByVal cZip As String, ByVal cPOBox As String, ByVal cMobile As String, ByVal cTel1 As String, ByVal cTel2 As String, ByVal cAddr1 As String, ByVal cAddr2 As String, ByVal shipType As String, ByVal PCs As Integer, ByVal cEmail As String, ByVal carrValue As String, ByVal carrCurr As String, ByVal codAmt As String, ByVal weight As String, ByVal custVal As String, ByVal custCurr As String, ByVal insrAmt As String, ByVal insrCurr As String, ByVal itemDesc As String) As String

**Input Parameters**

The input parameters for the method “addShipment” are as follows.

| **Name**  | **Data Type** | **Description**                         | **Comment**                                                      |
|-----------|---------------|-----------------------------------------|------------------------------------------------------------------|
| passKey   | String        | Will be provided upon Request           | Unique Code for each Customer provided by SMSA                   |
| refNo     | String        | Cannot be Null                          | Unique Number for each day                                       |
| sentDate  | String        | Date                                    |                                                                  |
| idNo      | String        | Optional                                |                                                                  |
| cName     | String        | Cannot be Null                          |                                                                  |
| Cntry     | String        | Country                                 | KSA                                                              |
| cCity     | String        | Destination City Name                   |                                                                  |
| cZip      | String        | Optional Zip Code                       |                                                                  |
| cPOBox    | String        | Optional POBox                          |                                                                  |
| cMobile   | String        | Mandatory                               | Must be at least 9 digits                                        |
| cTel1     | String        | Optional                                |                                                                  |
| cTel2     | String        | Optional                                |                                                                  |
| cAddr1    | String        | Address Line 1                          | Either of Address fields to be filled duly                       |
| cAddr2    | String        | Address Line 2                          |                                                                  |
| shipType  | String        | Mandatory Value from DLV,VAL,HAL or BLT | DLV for normal Shipments for other special cases we will provide |
| PCs       | Integer       | Mandatory Integer                       | No. of Pieces                                                    |
| cEmail    | String        | Optional                                |                                                                  |
| carrValue | Integer       | Optional                                | Carriage Value                                                   |
| carrCurr  | String        | Optional                                | Carriage Currency                                                |
| codAmt    | Integer       | Required if CASH ON DELIVERY            | Value Either 0 or greater than 0 in case of COD                  |
| weight    | String        | Weight of the Shipment                  |                                                                  |
| custVal   | String        | Optional                                | Customs Value                                                    |
| custCurr  | String        | Optional                                | Customs Currency                                                 |
| insrAmt   | String        | Optional                                | Insurance Value                                                  |
| insrCurr  | String        | Optional                                | Insurance Currency                                               |
| itemDesc  | String        | Optional                                | Description of the items present in shipment                     |

**Output Parameters**

The output is a String whether the shipment information Upload was Success or failed with reason.

If the data upload to our system was successful it will return the SMSA Airway bill Number which has to be displayed on the shipment with barcode.

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

Get Retail Cities
=================

This method can be used to get the list of Cities available for Retail Deliveries of SMSA.

This can be populated by eCommerce website who wants to avail this functionality.

The method name being used here is “getRTLCities”. The method signature is as follows.

Public Function getRTLCities(ByVal passkey As String) As System.Data.DataSet

**Input Parameters**

The input parameter for the method “getRTLCities” is as follows.

| **Name**    | **Data Type** | **Description**                    | **Comment** |
|-------------|---------------|------------------------------------|-------------|
| **passkey** | String        | PassKey Provided for secure access | Mandatory   |

**Output Parameters**

The output is object of Dataset with Complete cities list for Retail deliveries.

It returns two columns as routCode and rCity.

This has to be used to get the Retails list available in that city.

Get Retail Center List
======================

This method can be used to get the list of Retails available for each city where Retail Deliveries of SMSA is available.

The method name being used here is “getRTLRetails”. The method signature is as follows.

Public Function getRTLRetails(ByVal cityCode As String, ByVal passkey As String) As System.Data.DataSet

**Input Parameters**

The input parameter for the method “getRTLRetails” is as follows.

| **Name**     | **Data Type** | **Description**                                           | **Comment** |
|--------------|---------------|-----------------------------------------------------------|-------------|
| **cityCode** | String        | cityCode value provided in previous getRTLCities function | Mandatory   |
| **passkey**  | String        | PassKey Provided for secure access                        | Mandatory   |

**Output Parameters**

The output is object of Dataset with Complete Retails list available under that city for Retail deliveries.

It returns retails details as retail Code, retail Name, Address English, Address Arabic, City, Phone and geo Location.

All values has to be saved in the address values of the shipment and shipment Type must be RTL while adding or uploading the shipment details through SMSA Web service.

Get Tracking By Customer Reference Number
=========================================

This method can be used to get the real-time tracking information of the shipment.

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

We hope this document covers all the aspects for using the web service for integration.
