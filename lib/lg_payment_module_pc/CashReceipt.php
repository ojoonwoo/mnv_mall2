<?php
    /*
     * [���ݿ����� �߱� ��û ������]
     *
     * �Ķ���� ���޽� POST�� ����ϼ���
     */
    $CST_PLATFORM               = $_POST["CST_PLATFORM"];       				//LG���÷��� ���� ���� ����(test:�׽�Ʈ, service:����)
    $CST_MID                    = $_POST["CST_MID"];            				//�������̵�(LG���÷������� ���� �߱޹����� �������̵� �Է��ϼ���)
                                                                         		//�׽�Ʈ ���̵�� 't'�� �ݵ�� �����ϰ� �Է��ϼ���.
    $LGD_MID                    = (("test" == $CST_PLATFORM)?"t":"").$CST_MID;  //�������̵�(�ڵ�����)    
    $LGD_TID                	= $_POST["LGD_TID"];			 				//LG���÷������� ���� �������� �ŷ���ȣ(LGD_TID)
    
	$LGD_METHOD   		    	= $_POST["LGD_METHOD"];							//�޼ҵ�('AUTH':����, 'CANCEL' ���)
    $LGD_OID                	= $_POST["LGD_OID"];							//�ֹ���ȣ(�������� ����ũ�� �ֹ���ȣ�� �Է��ϼ���)
    $LGD_PAYTYPE                = $_POST["LGD_PAYTYPE"];						//�������� �ڵ� (SC0030:������ü, SC0040:�������, SC0100:�������Ա� �ܵ�)
    $LGD_AMOUNT     		    = $_POST["LGD_AMOUNT"];            				//�ݾ�("," �� ������ �ݾ��� �Է��ϼ���)
    $LGD_CASHCARDNUM        	= $_POST["LGD_CASHCARDNUM"];					//�߱޹�ȣ(�ֹε�Ϲ�ȣ,���ݿ�����ī���ȣ,�޴�����ȣ ���)
    $LGD_CUSTOM_MERTNAME 		= $_POST["LGD_CUSTOM_MERTNAME"];    			//������
    $LGD_CUSTOM_BUSINESSNUM 	= $_POST["LGD_CUSTOM_BUSINESSNUM"];				//����ڵ�Ϲ�ȣ
    $LGD_CUSTOM_MERTPHONE 		= $_POST["LGD_CUSTOM_MERTPHONE"];    			//���� ��ȭ��ȣ
    $LGD_CASHRECEIPTUSE     	= $_POST["LGD_CASHRECEIPTUSE"];					//���ݿ������߱޿뵵('1':�ҵ����, '2':��������)
    $LGD_PRODUCTINFO        	= $_POST["LGD_PRODUCTINFO"];					//��ǰ��
    $LGD_TID        			= $_POST["LGD_TID"];							//LG���÷��� �ŷ���ȣ

	$configPath 				= "C:/lgdacom"; 						 		//LG���÷������� ������ ȯ������("/conf/lgdacom.conf") ��ġ ����.   
    	
    require_once("./lgdacom/XPayClient.php");
    $xpay = &new XPayClient($configPath, $CST_PLATFORM);
    $xpay->Init_TX($LGD_MID);
    $xpay->Set("LGD_TXNAME", "CashReceipt");
    $xpay->Set("LGD_METHOD", $LGD_METHOD);
    $xpay->Set("LGD_PAYTYPE", $LGD_PAYTYPE);

    if ($LGD_METHOD == "AUTH"){											// ���ݿ����� �߱� ��û
    	$xpay->Set("LGD_OID", $LGD_OID);
    	$xpay->Set("LGD_AMOUNT", $LGD_AMOUNT);
    	$xpay->Set("LGD_CASHCARDNUM", $LGD_CASHCARDNUM);
    	$xpay->Set("LGD_CUSTOM_MERTNAME", $LGD_CUSTOM_MERTNAME);
    	$xpay->Set("LGD_CUSTOM_BUSINESSNUM", $LGD_CUSTOM_BUSINESSNUM);
    	$xpay->Set("LGD_CUSTOM_MERTPHONE", $LGD_CUSTOM_MERTPHONE);
    	$xpay->Set("LGD_CASHRECEIPTUSE", $LGD_CASHRECEIPTUSE);

		if ($LGD_PAYTYPE == "SC0030"){									//������� ������ü�� ���ݿ����� �߱޿�û�� �ʼ� 
			$xpay->Set("LGD_TID", $LGD_TID);
		}
		else if ($LGD_PAYTYPE == "SC0040"){								//������� ������°� ���ݿ����� �߱޿�û�� �ʼ� 
			$xpay->Set("LGD_TID", $LGD_TID);
			$xpay->Set("LGD_SEQNO", "001");
		}
		else {															//�������Ա� �ܵ��� �߱޿�û
			$xpay->Set("LGD_PRODUCTINFO", $LGD_PRODUCTINFO);
    	}
    }else {																// ���ݿ����� ��� ��û 
    	$xpay->Set("LGD_TID", $LGD_TID);
 
    	if ($LGD_PAYTYPE == "SC0040"){									//������°� ���ݿ����� �߱���ҽ� �ʼ�
			$xpay->Set("LGD_SEQNO", "001");
    	}
    }


    /*
     * 1. ���ݿ����� �߱�/��� ��û ���ó��
     *
     * ��� ���� �Ķ���ʹ� �����޴����� �����Ͻñ� �ٶ��ϴ�.
     */
    if ($xpay->TX()) {
        //1)���ݿ����� �߱�/��Ұ�� ȭ��ó��(����,���� ��� ó���� �Ͻñ� �ٶ��ϴ�.)
        echo "���ݿ����� �߱�/��� ��ûó���� �Ϸ�Ǿ����ϴ�.  <br>";
        echo "TX Response_code = " . $xpay->Response_Code() . "<br>";
        echo "TX Response_msg = " . $xpay->Response_Msg() . "<p>";
        
        echo "����ڵ� : " . $xpay->Response("LGD_RESPCODE",0) . "<br>";
        echo "����޼��� : " . $xpay->Response("LGD_RESPMSG",0) . "<br>";
        echo "�ŷ���ȣ : " . $xpay->Response("LGD_TID",0) . "<p>";
        
        $keys = $xpay->Response_Names();
            foreach($keys as $name) {
                echo $name . " = " . $xpay->Response($name, 0) . "<br>";
            }
 
    }else {
        //2)API ��û ���� ȭ��ó��
        echo "���ݿ����� �߱�/��� ��ûó���� ���еǾ����ϴ�.  <br>";
        echo "TX Response_code = " . $xpay->Response_Code() . "<br>";
        echo "TX Response_msg = " . $xpay->Response_Msg() . "<p>";
    }
?>