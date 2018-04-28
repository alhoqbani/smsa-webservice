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
