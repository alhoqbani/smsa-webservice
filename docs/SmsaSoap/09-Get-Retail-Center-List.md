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
