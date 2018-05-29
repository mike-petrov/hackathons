using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class menu : MonoBehaviour {

	public string url_upload = "http://nvkz-city.esy.es/upload_marked.php";
	public string url_download = "http://nvkz-city.esy.es/download_marked.php";
	public string[] message_content;


	public Text title_0;
    public Text title_1;
	public GameObject dawn1_1;
	public GameObject dawn1_2;
	public GameObject dawn1_3;
	public GameObject dawn1_4;
	public GameObject dawn1_5;
	public Text title_2;
	public GameObject dawn2_1;
	public GameObject dawn2_2;
	public GameObject dawn2_3;
	public GameObject dawn2_4;
	public GameObject dawn2_5;
	public Text title_3;
	public GameObject dawn3_1;
	public GameObject dawn3_2;
	public GameObject dawn3_3;
	public GameObject dawn3_4;
	public GameObject dawn3_5;
	public Text title_4;
	public GameObject dawn4_1;
	public GameObject dawn4_2;
	public GameObject dawn4_3;
	public GameObject dawn4_4;
	public GameObject dawn4_5;

	public GameObject content;

	void Start()
	{
		WWWForm form = new WWWForm();
		form.AddField("command", "upload");
		WWW messages = new WWW(url_upload, form);
		StartCoroutine(UploadMessage(messages));
	}

	IEnumerator UploadMessage(WWW messages)
	{
		yield return messages;
		if (messages.text.Length > 0)
		{
			message_content = messages.text.Split('|');
			UploadOK1();
		}
		else
		{
			UploadERROR1();
		}
	}

	void UploadOK1()
	{
        content.SetActive(true);
		title_1.text = message_content[1] + ' ' + message_content[2];
		title_2.text = message_content[3] + ' ' + message_content[4];
		title_3.text = message_content[5] + ' ' + message_content[6];
		title_4.text = message_content[7] + ' ' + message_content[8];
	}

	void UploadERROR1()
	{
		content.SetActive(false);
        title_0.text = "Спасибо за участие!";
	}

	public void Downloading()
	{
        WWWForm form = new WWWForm();
        form.AddField("command", "download");
        form.AddField("programmer_1", dawn1_1.GetComponent<Text>().text);
        form.AddField("designer_1", dawn1_2.GetComponent<Text>().text);
        form.AddField("manager_1", dawn1_3.GetComponent<Text>().text);
        form.AddField("speaker_1", dawn1_4.GetComponent<Text>().text);
        form.AddField("take_part_1", dawn1_5.GetComponent<Text>().text);
		form.AddField("programmer_2", dawn2_1.GetComponent<Text>().text);
		form.AddField("designer_2", dawn2_2.GetComponent<Text>().text);
		form.AddField("manager_2", dawn2_3.GetComponent<Text>().text);
		form.AddField("speaker_2", dawn2_4.GetComponent<Text>().text);
		form.AddField("take_part_2", dawn2_5.GetComponent<Text>().text);
		form.AddField("programmer_3", dawn3_1.GetComponent<Text>().text);
		form.AddField("designer_3", dawn3_2.GetComponent<Text>().text);
		form.AddField("manager_3", dawn3_3.GetComponent<Text>().text);
		form.AddField("speaker_3", dawn3_4.GetComponent<Text>().text);
		form.AddField("take_part_3", dawn3_5.GetComponent<Text>().text);
		form.AddField("programmer_4", dawn4_1.GetComponent<Text>().text);
		form.AddField("designer_4", dawn4_2.GetComponent<Text>().text);
		form.AddField("manager_4", dawn4_3.GetComponent<Text>().text);
		form.AddField("speaker_4", dawn4_4.GetComponent<Text>().text);
		form.AddField("take_part_4", dawn4_5.GetComponent<Text>().text);
        WWW marks = new WWW(url_download, form);
        StartCoroutine(UploadMarks(marks));
	}
	IEnumerator UploadMarks(WWW marks)
	{
		yield return marks;
		if (marks.text.Length > 0)
		{
			UploadOK2();
		}
		else
		{
			UploadERROR2();
		}
	}

	void UploadOK2()
	{
		content.SetActive(false);
		Application.LoadLevel(Application.loadedLevel);
	}

	void UploadERROR2()
	{
		title_1.text = "Ошибка";
	}
}
