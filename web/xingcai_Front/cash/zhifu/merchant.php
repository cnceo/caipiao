﻿<?php

//商家私钥，由RSA-S密钥对生成工具生成(merchant private key,generated by the key pair generate tools for RSA-S)
$priKey= '-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQCdsspRWTcpCpAllm/rScXz7zNNHjjhox/Dpn4cPwY7EYkXmSk4
qyGcrh1LLTnaRIKlkFIsQz3uLTrftxrJZmEJwOhAMAx2PmnZ44rE6l7s/fkd1pfv
TvVQVIW1KY/U6e0Uh66wTtrewgvWPpPh7YS1by7JxsxfS+k5KjdQd1x70QIDAQAB
AoGBAI9rcksHm34M6En3BnRzVL/kFMEXMl4rcBENE3Z27yC7cvXuSqoKIXiQdX3Q
dOQIGNWgastsoB9ELV4W9hqirK63eXzEA9idfOQDukzFuz27p3cFsXQkPN4aQWAA
LFT3Q4p0oaSquS1v0zihm0qZNpnVafEQSseNLOxA/M1ZlywtAkEA0D8dyM8JK+c7
2eSy0nGKDSMN4M6OJxgQ6ShmPBggyJPhJnUvqZSOgR0zZKURKeX7dPI4GiAXhybX
apVo7L3zLwJBAMHcTPuL8AGuDkCzp2USPrMEIxpFdxrc7JRdAscV1LbrF9SSsWf4
uNoTLlolU+zgtRbxDhollBr33d9k9Kt8wP8CQBqF32pDDDz+P346BZiOA3I2476d
MDfEdersTVEcFZjWVNfMFxz3IctKB9CqwWvfsc4sR370VWrORKN7khiM/NsCQACV
LfIPoKAQquBM6fLm1CNrnsNkdBAzm85yXSDGEwadvEuaSUg7uiqFpj0FIbRzlHfG
L7mqZUCTgCo8vnOJg3cCQAbwN/wPUFoPkhmF2yjSgqydOh2r9chHXMLaEwdJzq39
RF08NsZFeQpxeS7O5xgOD01XTBFYUS9fZmyR2AOzEG4=
-----END RSA PRIVATE KEY-----';

//智付公钥，每个商家对应一个固定的智付公钥，即为商家后台"公钥管理"->"智付公钥"里的内容
//Dinpay public key,every merchant has a unique Dinpay public key,you can find it on our merchant system,Pay Management - > Public Key - >Dinpay Public Key.
$pubKey = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCdsspRWTcpCpAllm/rScXz7zNN
Hjjhox/Dpn4cPwY7EYkXmSk4qyGcrh1LLTnaRIKlkFIsQz3uLTrftxrJZmEJwOhA
MAx2PmnZ44rE6l7s/fkd1pfvTvVQVIW1KY/U6e0Uh66wTtrewgvWPpPh7YS1by7J
xsxfS+k5KjdQd1x70QIDAQAB
-----END PUBLIC KEY-----'; 


?>