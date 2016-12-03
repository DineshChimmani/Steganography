import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.*;

public class AudioSteg extends JFrame implements ActionListener	{
	JButton encode,decode;
	JTextArea message;
	File masterFile, outputFile;
	JMenu help;
	JMenuItem about;
	AudioSteg()	{
	
		super("Steganography Using Audio");
		Container con=getContentPane();
		con.setLayout(null);
		
		encode = new JButton("Encode");
		decode = new JButton("Decode");
		
		message = new JTextArea(20,80);
		message.setLineWrap(true);
		
		JMenuBar menu = new JMenuBar();
		JMenu help = new JMenu("Help");	help.setMnemonic('H');
		about = new JMenuItem("About"); about.setMnemonic('A'); help.add(about);
		setJMenuBar(menu);
		
		message.setBounds(25,35,300,210);
		encode.setBounds(50,270,110,25);
		decode.setBounds(220,270,110,25);
		
		menu.add(help);
		con.add(menu);
		con.add(message);
		con.add(encode);
		con.add(decode);
				
		encode.addActionListener(this);
		decode.addActionListener(this);
		
		con.setSize(500,500);
		con.setVisible(true);
		
		about.addActionListener(
			new ActionListener(){
				public void actionPerformed(ActionEvent e)
				{
					JFrame fr;
					JLabel aboutinf,aboutinf1,aboutinf2,aboutinf3,aboutinf4,aboutinf5,aboutinf6,aboutinf7;
					aboutinf = new JLabel("Steganography has been developed in java ");
					aboutinf1 = new JLabel("It has been made by");
					aboutinf2 = new JLabel("Dinesh Chimmani"+"          "+"104518177");
					aboutinf3 = new JLabel("Lohith Elisetti"+"         "+"104514421");
					aboutinf4 = new JLabel("Vinod Kholiya"+"       "+"104524927");
					aboutinf5 = new JLabel("for Advanced Software Engoneering");
					aboutinf6 = new JLabel("under guidance of  Ziad Kobti");
					aboutinf7 = new JLabel("All copyrights are reserved to these people............");
					aboutinf.setLocation(4, 8);aboutinf1.setLocation(6, 23);aboutinf2.setLocation(6, 43);aboutinf3.setLocation(6, 58);
					aboutinf4.setLocation(6, 73);aboutinf5.setLocation(6, 90);aboutinf6.setLocation(6, 105);aboutinf7.setLocation(6, 130);
					aboutinf.setSize(300,60); aboutinf1.setSize(300,60); aboutinf2.setSize(350,60);aboutinf3.setSize(350,60);
					aboutinf4.setSize(350,60); aboutinf5.setSize(350,60); aboutinf6.setSize(380,60); aboutinf7.setSize(350,60);
					fr = new JFrame("About");
					fr.add(aboutinf);fr.add(aboutinf1);fr.add(aboutinf2);fr.add(aboutinf3);
					fr.add(aboutinf4);fr.add(aboutinf5);fr.add(aboutinf6);fr.add(aboutinf7);
					Font f = new Font("Dialog", Font.PLAIN, 15);
					aboutinf.setFont(f);aboutinf1.setFont(f);aboutinf2.setFont(f);aboutinf3.setFont(f);
					aboutinf4.setFont(f);aboutinf5.setFont(f);aboutinf6.setFont(f);aboutinf7.setFont(f);
					fr.setSize(400,250);
					fr.setResizable(false);
					fr.setLayout(null);
					fr.setVisible(true);
					fr.setLocation(170,170);
					
				}
			}
		);
		
	}
	
	public void actionPerformed(ActionEvent ae)	{
		try	{
			JFileChooser filechooser;
			filechooser=new JFileChooser();
			String name; 
			filechooser.setFileSelectionMode(JFileChooser.FILES_ONLY);
			if(ae.getSource()==encode)		{
				int r=filechooser.showOpenDialog(this);
				masterFile = filechooser.getSelectedFile();
				//File type
				if(r==JFileChooser.CANCEL_OPTION)
					JOptionPane.showMessageDialog(this,"File Not Selected","Error",JOptionPane.ERROR_MESSAGE);
				else	{
					name=masterFile.getName();
					if(!(name.endsWith(".mp3")))
						JOptionPane.showMessageDialog(this,"Select Only mp3","Error",JOptionPane.ERROR_MESSAGE);
					else
						masterFile=masterFile;
						int result, result2;
					do
					{
						File previousFile= filechooser.getSelectedFile();
						result= filechooser.showDialog(null, "Select Output file");
						if(result== filechooser.APPROVE_OPTION)
						{
							outputFile= filechooser.getSelectedFile();
							if(outputFile.exists())
							{
								result2= JOptionPane.showConfirmDialog(null, "File "+ outputFile.getName()+ " already exists!\nWould you like to OVERWRITE it?", "File already exists!", JOptionPane.YES_NO_OPTION);
								if(result2== JOptionPane.NO_OPTION)
								{
									if(previousFile!= null)
										filechooser.setSelectedFile(previousFile);
									continue;
								}
							}
							break;
						}
					} while(result!= filechooser.CANCEL_OPTION);
					JPasswordField jpf = new JPasswordField();
					JOptionPane.showConfirmDialog(null, jpf,"Enter Password:", JOptionPane.OK_CANCEL_OPTION);
					JPasswordField jpf1 = new JPasswordField();
					JOptionPane.showConfirmDialog(null, jpf1,"Confirm Password:", JOptionPane.OK_CANCEL_OPTION);
					if( (jpf.getText().equals(jpf1.getText())) && (jpf.getText().length()>=8 && jpf.getText().length()<=16) )	{
						if (r == JFileChooser.APPROVE_OPTION){
							String msg = message.getText();
							String key = jpf.getText();
							AudioSteg.validate(key);
							String text = SimpleProtector.encrypt(msg);
							boolean stat;
							stat = Steganograph.embedMessage(masterFile,outputFile,text);
						}
					}
					else	{
						JOptionPane.showMessageDialog(null,"Passwords did not match (OR) Password length should be (8-16)");
					}
				}
			}
			else if(ae.getSource()==decode)	{
				SteganoInformation steg;
				int r=filechooser.showOpenDialog(this);
				masterFile = filechooser.getSelectedFile();
				
				//File type
				steg = new SteganoInformation(masterFile);
				String msg= Steganograph.retrieveMessage(steg);
				
				JPasswordField jpf = new JPasswordField();
				JOptionPane.showConfirmDialog(null, jpf,"Enter Password:", JOptionPane.OK_CANCEL_OPTION);
				String key = jpf.getText();
				AudioSteg.validate(key);
				String decodedText = SimpleProtector.decrypt(msg);
				message.setText(decodedText);
			}
		}
		catch(Exception e)	{
			JOptionPane.showMessageDialog(this,e,"Error",JOptionPane.ERROR_MESSAGE);
		}
	}
	public static void validate(String pwd)	{
		String orig = pwd;
		if(pwd.length()<=16)	{
			for(int i=0;;i++)	{
				if(orig.length()==16)
					break;
				orig = orig+'@';
				if(orig.length()<16)
					orig = orig+'A';
			}
			SimpleProtector.keyValues(orig);
		}
	}
	public static void main(String args[])	{
		AudioSteg as = new AudioSteg();
		as.setSize(400,400);
		as.setLocation(250,150);
		as.setResizable(false);
		as.setVisible(true);
		as.addWindowListener(new WindowAdapter()	{
			public void windowClosing(WindowEvent we)	{
				System.exit(0);
			}
		});
	}
}