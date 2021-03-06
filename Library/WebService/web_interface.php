<?php
header("Content-type: text/xml");
$xml = 
<<<SOAP
<?xml version="1.0" ?>
<definitions name="soap" targetNamespace="urn:soap" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:tns="urn:soap" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns="http://schemas.xmlsoap.org/wsdl/">
<types xmlns="http://schemas.xmlsoap.org/wsdl/" />
<portType name="soapPort"><operation name="xml_error">
<input message="tns:xml_errorRequest" />
<output message="tns:xml_errorResponse" />
</operation>
<operation name="customer_delivery_receipt">
<input message="tns:customer_delivery_receiptRequest" />
<output message="tns:customer_delivery_receiptResponse" />
</operation>
<operation name="customer_return_receipt">
<input message="tns:customer_return_receiptRequest" />
<output message="tns:customer_return_receiptResponse" />
</operation>
<operation name="xml_to_array">
<input message="tns:xml_to_arrayRequest" />
<output message="tns:xml_to_arrayResponse" />
</operation>
<operation name="test_api">
<input message="tns:test_apiRequest" />
<output message="tns:test_apiResponse" />
</operation>
</portType>
<binding name="soapBinding" type="tns:soapPort">
<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http" />
<operation name="xml_error">
<soap:operation soapAction="urn:soap#Web_Service_Server#xml_error" />
<input><soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</input>
<output>
<soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</output>
</operation>
<operation name="customer_delivery_receipt">
<soap:operation soapAction="urn:soap#Web_Service_Server#customer_delivery_receipt" />
<input><soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</input>
<output>
<soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</output>
</operation>
<operation name="customer_return_receipt">
<soap:operation soapAction="urn:soap#Web_Service_Server#customer_return_receipt" />
<input><soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</input>
<output>
<soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</output>
</operation>
<operation name="xml_to_array">
<soap:operation soapAction="urn:soap#Web_Service_Server#xml_to_array" />
<input><soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</input>
<output>
<soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</output>
</operation>
<operation name="test_api">
<soap:operation soapAction="urn:soap#Web_Service_Server#test_api" />
<input><soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</input>
<output>
<soap:body use="encoded" namespace="urn:soap" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" />
</output>
</operation>
</binding>
<service name="soap">
<documentation />
<port name="soapPort" binding="tns:soapBinding"><soap:address location="http://test.meilele.com:8085/web_service_server.php" />
</port>
</service>
<message name="xml_errorRequest">
<part name="error_status" type="xsd:string" />
<part name="error_msg" type="xsd:string" />
</message>
<message name="xml_errorResponse">
<part name="xml_error" type="xsd:string" />
</message>
<message name="customer_delivery_receiptRequest">
<part name="xmlcon" type="xsd:string" />
</message>
<message name="customer_delivery_receiptResponse">
<part name="customer_delivery_receipt" type="xsd:string" />
</message>
<message name="customer_return_receiptRequest">
<part name="xmlcon" type="xsd:string" />
</message>
<message name="customer_return_receiptResponse">
<part name="customer_return_receipt" type="xsd:string" />
</message>
<message name="xml_to_arrayRequest">
<part name="xml" type="xsd:string" />
</message>
<message name="xml_to_arrayResponse">
<part name="xml_to_array" type="xsd:string" />
</message>
<message name="test_apiRequest">
<part name="a" type="xsd:string" />
<part name="b" type="xsd:string" />
</message>
<message name="test_apiResponse">
<part name="test_api" type="xsd:string" />
</message>
</definitions>
SOAP;
echo $xml;
?>