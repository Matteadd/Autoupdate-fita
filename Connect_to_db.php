<?php
$servername = "localhost";
$username = "matteofita";
$password = "";
$dbname="fita";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}


$query="select Site_Name from ms_rbs";

$result = $conn->query($query);

if ($result->num_rows>0)
{
    while ($row= $result->fetch_assoc())
    {
       echo $row["Site_Name"];
       echo "<br>";
    }
}

$queryDaFaew="INSERT INTO \`ms_rbs\` (\`Revision_by_WIND3\`, \`Site_Name\`, \`TN_Model\`, \`Variant\`, \`Baseband\`, \`Ports_Connectivity_Autonegotiation\`, \`Ports_Assignment_Type_TN_Unique_Code\`, \`VLAN_OM\`, \`BBX_Name\`, \`BBX_RATs\`, \`BBX_IP_Address_Subnet_OM\`, \`BBY_Name\`, \`BBY_RATs\`, \`BBY_IP_Address_Subnet_OM\`, \`BBZ_Name\`, \`BBZ_RATs\`, \`BBZ_IP_Address_Subnet_OM\`, \`Default_Gateway_OM\`, \`NTP_Server_IP_addresses_1_for_Time_Of_Day\`, \`NTP_Server_IP_addresses_2_for_Time_Of_Day\`, \`OSS_SNMP_V2C_Target\`, \`GSM_VLAN_Abis\`, \`GSM_IP_Subnet_Abis\`, \`GSM_Default_Gateway_Abis\`, \`BSC\`, \`GSM_BSC_Floating_IP_address\`, \`WCDMA1_RBS_Id\`, \`WCDMA1_VLAN_Iub\`, \`WCDMA1_IP_Subnet_WCDMA\`, \`WCDMA1_Default_Gateway_WCDMA\`, \`WCDMA1_RNC\`, \`WCDMA1_RNC_NTP_Server1\`, \`WCDMA1_RNC_NTP_Server2\`, \`WCDMA2_RBS_Id\`, \`WCDMA2_VLAN_Iub\`, \`WCDMA2_IP_Subnet_WCDMA\`, \`WCDMA2_Default_Gateway_WCDMA\`, \`WCDMA2_RNC\`, \`WCDMA2_RNC_NTP_Server1\`, \`WCDMA2_RNC_NTP_Server2\`, \`LTE_IPSEC_eNB_Id\`, \`LTE_IPSEC_IP_Subnet_S1_X2_Inner\`, \`LTE_IPSEC_peer_IP_address\`, \`LTE_IPSEC_Wind3_localTrafficSelector\`, \`LTE_IPSEC_Wind3_remoteTrafficSelector\`, \`LTE_IPSEC_Iliad_localTrafficSelector\`, \`LTE_IPSEC_Iliad_remoteTrafficSelector\`, \`LTE_OUTER_VLAN S1_X2\`, \`LTE_OUTER_IP_Subnet_S1_X2\`, \`LTE_OUTER_Default_Gateway_S1_X2\`, \`LTE_WIND3_MME1_Name\`, \`LTE_WIND3_MME1_IP_address1\`, \`LTE_WIND3_MME1_IP_address2\`, \`LTE_WIND3_MME2_Name\`, \`LTE_WIND3_MME2_IP_address1\`, \`LTE_WIND3_MME2_IP_address2\`, \`LTE_WIND3_MME3_Name\`, \`LTE_WIND3_MME3_IP_address1\`, \`LTE_WIND3_MME3_IP_address2\`, \`LTE_WIND3_MME4_Name\`, \`LTE_WIND3_MME4_IP_address1\`, \`LTE_WIND3_MME4_IP_address2\`, \`LTE_WIND3_MME5_Name\`, \`LTE_WIND3_MME5_IP_address1\`, \`LTE_WIND3_MME5_IP_address2\`, \`LTE_WIND3_MME6_Name\`, \`LTE_WIND3_MME6_IP_address1\`, \`LTE_WIND3_MME6_IP_address2\`, \`LTE_ILIAD_MME1_Name\`, \`LTE_ILIAD_MME1_IP_address1\`, \`LTE_ILIAD_MME1_IP_address2\`, \`LTE_ILIAD_MME2_Name\`, \`LTE_ILIAD_MME2_IP_address1\`, \`LTE_ILIAD_MME2_IP_address2\`, \`LTE_ILIAD_MME3_MME-3 Name\`, \`LTE_ILIAD_MME3_IP_address1\`, \`LTE_ILIAD_MME3_IP_address2\`, \`LTE_ILIAD_MME4_MME-4 Name\`, \`LTE_ILIAD_MME4_MME-4 IP address 1\`, \`LTE_ILIAD_MME4_MME-4 IP address 2\`, \`PTP_Grandmaster_IP_address\`, \`TN_Cascading_Transmission_Variant\`, \`TN_Cascading_Connected_Site_Name\`, \`ID\`, \`GROUP_ID\`, \`ID_USER\`) VALUES";
$Revision_by_WIND3="";
$Site_Name="";
$TN_Model="";
$Variant="";
$Baseband="";
$Ports_Connectivity_Autonegotiation="";
$Ports_Assignment_Type_TN_Unique_Code="";
$VLAN_OM="";
$BBX_Name="";
$BBX_RATs="";
$BBX_IP_Address_Subnet_OM="";
$BBY_Name="";
$BBY_RATs="";
$BBY_IP_Address_Subnet_OM="";
$BBZ_Name="";
$BBZ_RATs="";
$BBZ_IP_Address_Subnet_OM="";
$Default_Gateway_OM="";
$NTP_Server_IP_addresses_1_for_Time_Of_Day="";
$NTP_Server_IP_addresses_2_for_Time_Of_Day="";
$OSS_SNMP_V2C_Target="";
$GSM_VLAN_Abis="";
$GSM_IP_Subnet_Abis="";
$GSM_Default_Gateway_Abis="";
$BSC="";
$GSM_BSC_Floating_IP_address="";
$WCDMA1_RBS_Id="";
$WCDMA1_VLAN_Iub="";
$WCDMA1_IP_Subnet_WCDMA="";
$WCDMA1_Default_Gateway_WCDMA="";
$WCDMA1_RNC="";
$WCDMA1_RNC_NTP_Server1="";
$WCDMA1_RNC_NTP_Server2="";
$WCDMA2_RBS_Id="";
$WCDMA2_VLAN_Iub="";
$WCDMA2_IP_Subnet_WCDMA="";
$WCDMA2_Default_Gateway_WCDMA="";
$WCDMA2_RNC="";
$WCDMA2_RNC_NTP_Server1="";
$WCDMA2_RNC_NTP_Server2="";
$LTE_IPSEC_eNB_Id="";
$LTE_IPSEC_IP_Subnet_S1_X2_Inner="";
$LTE_IPSEC_peer_IP_address="";
$LTE_IPSEC_Wind3_localTrafficSelector="";
$LTE_IPSEC_Wind3_remoteTrafficSelector="";
$LTE_IPSEC_Iliad_localTrafficSelector="";
$LTE_IPSEC_Iliad_remoteTrafficSelector="";
$LTE_OUTER_VLAN_S1_X2="";
$LTE_OUTER_IP_Subnet_S1_X2="";
$LTE_OUTER_Default_Gateway_S1_X2="";
$LTE_WIND3_MME1_Name="";
$LTE_WIND3_MME1_IP_address1="";
$LTE_WIND3_MME1_IP_address2="";
$LTE_WIND3_MME2_Name="";
$LTE_WIND3_MME2_IP_address1="";
$LTE_WIND3_MME2_IP_address2="";
$LTE_WIND3_MME3_Name="";
$LTE_WIND3_MME3_IP_address1="";
$LTE_WIND3_MME3_IP_address2="";
$LTE_WIND3_MME4_Name="";
$LTE_WIND3_MME4_IP_address1="";
$LTE_WIND3_MME4_IP_address2="";
$LTE_WIND3_MME5_Name="";
$LTE_WIND3_MME5_IP_address1="";
$LTE_WIND3_MME5_IP_address2="";
$LTE_WIND3_MME6_Name="";
$LTE_WIND3_MME6_IP_address1="";
$LTE_WIND3_MME6_IP_address2="";
$LTE_ILIAD_MME1_Name="";
$LTE_ILIAD_MME1_IP_address1="";
$LTE_ILIAD_MME1_IP_address2="";
$LTE_ILIAD_MME2_Name="";
$LTE_ILIAD_MME2_IP_address1="";
$LTE_ILIAD_MME2_IP_address2="";
$LTE_ILIAD_MME3_MME_3_Name="";
$LTE_ILIAD_MME3_IP_address1="";
$LTE_ILIAD_MME3_IP_address2="";
$LTE_ILIAD_MME4_MME_4_Name="";
$LTE_ILIAD_MME4_MME_4_IP_address_1="";
$LTE_ILIAD_MME4_MME_4_IP_address_2="";
$PTP_Grandmaster_IP_address="";
$TN_Cascading_Transmission_Variant="";
$TN_Cascading_Connected_Site_Name="";
$ID="";
$GROUP_ID="";
$ID_USER="";

?>


